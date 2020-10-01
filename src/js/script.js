const setInputFilter = (textbox, inputFilter) => {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (event) {
        textbox.addEventListener(event, function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    });
}

let numericOnlyInputs = [
    "deposit_summ",
    "deposit_refill_summ"
]

numericOnlyInputs.forEach(name => {
    setInputFilter(document.getElementById(name), function (value) {
        return /^\d*\.?\d*$/.test(value);
    });
});

const isDate = (_date) => {
    const _regExp = new RegExp('^(?:(?:31(\\/|-|\\.)(?:0?[13578]|1[02]))\\1|(?:(?:29|30)(\\/|-|\\.)(?:0?[13-9]|1[0-2])\\2))(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$|^(?:29(\\/|-|\\.)0?2\\3(?:(?:(?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\\d|2[0-8])(\\/|-|\\.)(?:(?:0?[1-9])|(?:1[0-2]))\\4(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$');
    return _regExp.test(_date);
}

const isNumeric = (value) => {
    return /^-?\d+\.*\d*$/.test(value);
}

const removeClassIfHas = (className, element) => {
    if (element.hasClass(`${className}`))
        element.removeClass(`${className}`);
}

const addClassIfAbsent = (className, element) => {
    if (!element.hasClass(`${className}`))
        element.addClass(`${className}`);
}

const Validate = () => {
    let deposit_summ_div = $("#summ_invalid");
    let deposit_summ = $("#deposit_summ").val();
    let isValidDeposit;

    let refill_summ_div = $("#refill_summ_invalid");
    let deposit_refill_summ = $("#deposit_refill_summ").val();
    let isValidRefill;

    let date_invalid_div = $("#date_invalid");
    let is_montlhy_refilled = $("input[name='deposit_refill']:checked").val();
    let isValidDate;


    if (!isDate($("#datepicker").val())) {
        isValidDate = false;
        removeClassIfHas("d-none", date_invalid_div)
    } else {
        isValidDate = true;
        addClassIfAbsent("d-none", date_invalid_div);
    }

    if (!isNumeric(deposit_summ)) {
        isValidDeposit = false;
        removeClassIfHas("d-none", deposit_summ_div);
    } else {
        isValidDeposit = true;
        addClassIfAbsent("d-none", deposit_summ_div);
    }

    if (is_montlhy_refilled === "1") {
        if (!isNumeric(deposit_refill_summ)) {
            isValidRefill = false;
           removeClassIfHas("d-none", refill_summ_div);
        }
        else {
            isValidRefill = true;
            addClassIfAbsent("d-none", refill_summ_div);
        }
    }
    else addClassIfAbsent("d-none", refill_summ_div);

    if (is_montlhy_refilled === "1")
        return isValidDate && isValidDeposit && isValidRefill;
    return isValidDate && isValidDeposit;
}

const Calculate = () => {
    if (!Validate())
        return false;
    let date = $("#datepicker").val();
    let summ = $("#deposit_summ").val();
    let term = $("#deposit_term").val();
    let refill = $("input[name='deposit_refill']:checked").val();
    let refill_summ = $("#deposit_refill_summ").val();

    $.ajax({
        method: "post",
        url: "calc.php",
        data: {date: date, summ: summ, term: term, refill: refill, refill_summ: refill_summ},
        success: function (data) {
            $(".result-summ").html(data);
        }
    });
}
