<?php
/**
 * @param $daysn - Количество дней в месяце на которые приходится вклад
 * @param $summ_last - Сумма на счете на конец прошлого месяца
 * @param $summ_add - Сумма ежемесячного пополнения
 * @param $percent - Поцентная ставка банка (в долях)
 * @param $daysy - Количество дней в году
 * @return float - Сумма после ежемесячного начисления процентов + сумма пополнения
 */
function CalculateInterest($daysn, $summ_last, $summ_add, $percent, $daysy) : float {
    return $summ_last + ($summ_last + $summ_add) * $daysn * ($percent / $daysy) + $summ_add;
}

CONST PERCENT = 0.1;

$date_string    = $_POST['date'];
$result_summ    = $_POST['summ'];
$term           = $_POST['term'];
$refill         = $_POST['refill'];
$refill_summ    = $_POST['refill_summ'];

$summ_add = $refill ? $refill_summ : 0;

$date       = new DateTime($date_string);
$start_date = new DateTime($date_string);;
$end_date   = $date->add(new DateInterval("P{$term}Y"));

$i = 0;
while($start_date < $end_date) {
    $days_year = $start_date->format("L") ? 366 : 365;
    if($start_date->format("n") == $end_date->format("n") && $start_date->format("Y") == $end_date->format("Y")) {
        $days_remaining = (int)$end_date->format("j") - (int)$start_date->format("j");
    }
    else {
        $days_remaining = (int)$start_date->format("t") - (int)$start_date->format("j");
    }

    $result_summ = CalculateInterest($days_remaining, $result_summ, $summ_add, PERCENT, $days_year);
    $start_date->add(new DateInterval("P".($days_remaining+1)."D"));

    $i++;
}
echo round($result_summ);