<?php 

setlocale(LC_TIME, 'ru_RU', setlocale(LC_TIME, '0'));

function strf_time($format, $timestamp, $locale)
{
    return strftime($format, $timestamp);
	$date_str = strftime($format, $timestamp);
    if (strpos($locale, '1251') !== false)
    {
        return iconv('cp1251', 'utf-8', $date_str);
    }
    else
    {
        return $date_str;
    }
}


echo draw_calendar($start);

function draw_calendar($start){
	$running_day = 0;
	/* draw table */
	$calendar = '<table cellpadding="0" cellspacing="0" class="table table-monthly"><thead>';

	/* table headings */
	$headings = array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье');
	$calendar.= '<tr class="calendar-row"><th class="calendar-day-head">'.implode('</th><th class="calendar-day-head">',$headings).'</th></tr></thead><tbody>';
	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* keep going with days.... */
	for($i = 0; $i < 28; $i++):
		$that_day = strtotime("+".$i." day", $start);
		$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$calendar.= '<div id="monthly_day_'.$i.'"><div class="day-number">'.date("d/m", $that_day).'</div></div>';
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$running_day++;
	endfor;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</tbody></table>';
	
	/* all done, return result */
	return $calendar;
}

/* sample usages */
//echo '<h2>July 2009</h2>';


//date('Y-m-d', strtotime('+1 day', strtotime($date)));


?>