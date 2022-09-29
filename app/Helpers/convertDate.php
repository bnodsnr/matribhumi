<?php 
use App\Helpers\NepaliCalendar;
use Carbon\Carbon;
if (! function_exists('convertDate')) {
  function convertDate($date)
	{
		$calendar = new NepaliCalendar();
		$timestamp  = strtotime($date);
		$year 		= date('Y', $timestamp);
		$month 		= date('m', $timestamp);
		$day 		= date('d', $timestamp);
		$nepdate = $calendar->eng_to_nep($year, $month, $day);
		$nepali_month = $nepdate['month'];
		$nepali_date  = $nepdate['date'];
		if (strlen($nepali_month) == 1) {
			$nepali_month = '0' . $nepali_month;
		} elseif (strlen($nepali_month) == 2) {
			$nepali_month;
		}
		if (strlen($nepali_date) == 1) {
			$nepali_date = '0' . $nepali_date;
		} elseif (strlen($nepali_date) == 2) {
			$nepali_date;
		}
		$finaldate = $nepdate['year'] . '-' . $nepali_month . '-' . $nepali_date;
		return $finaldate;
	}
}

if( !function_exists('get_current_year')) {
	function get_current_year() {
		$current_date = convertDate(date('Y-m-d'));
		$exp = explode('-', $current_date);
		$year = $exp[0];
		return $year;
	}
}

if( !function_exists('get_current_month')) {
	function get_current_month() {
		$current_date = convertDate(date('Y-m-d'));
		$exp = explode('-', $current_date);
		$month = $exp[1];
		return $month;
	}
}

if( !function_exists('get_current_day')) {
	function get_current_day() {
		$current_date = convertDate(date('Y-m-d'));
		$exp = explode('-', $current_date);
		$month = $exp[2];
		return $month;
	}
}

if ( !function_exists('getNepaliMonthName') ) {
	function getNepaliMonthName($num)
	{
		if ($num == 1) {
			$month = 'वैशाख';

		} elseif ($num == 2) {
			$month = 'ज्येष्ठ';
		} elseif ($num == 3) {
			$month = 'असार';
		} elseif ($num == 4) {
			$month = 'श्रावण';
		} elseif ($num == 5) {
			$month = 'भाद्र';
		} elseif ($num == 6) {
			$month = 'आश्विन';
		} elseif ($num == 7) {
			$month = 'कार्तिक';
		} elseif ($num == 8) {
			$month = 'मार्ग';
		} elseif ($num == 9) {
			$month = 'पौष';
		} elseif ($num == 10) {
			$month = 'माघ';
		} elseif ($num == 11) {
			$month = 'फाल्गुन';
		} elseif ($num == 12) {
			$month = 'चैत्र';
		}

		return $month;
	}
}

if( !function_exists('extractDate')) {
	function extractDate($timestamp) {
		$newdate = explode(' ', $timestamp);
		return $newdate[0];
	}
}

if( !function_exists('currentday')) {
	function currentDay() {
		$date = date('Y-m-d');

    $dayName = Carbon::parse($date)->dayName;
		$nepaliDayName='';
		if ($dayName == "Sunday") {
			$nepaliDayName = 'आइतबार';
		} elseif ($dayName == "Monday") {
			$nepaliDayName = 'सोमबार';
		} elseif ($dayName == "Tuesday") {
			$nepaliDayName = 'मंगलबार';
		} elseif ($dayName == "Wednesday") {
			$nepaliDayName = 'बुधबार';
		} elseif ($dayName == "Thrusday") {
			$nepaliDayName = 'बिहिबार';
		} elseif ($dayName == "Friday") {
			$nepaliDayName = 'शुक्रबार';
		} elseif ($dayName == "") {
			$nepaliDayName = 'शनिबार';
		} 

		return $nepaliDayName;
	}
}

if( !function_exists('currenttimestamp')) {
	function currenttimestamp() {
		$currentTime = Carbon::now();
    $dt = $currentTime->toDateTimeString();
		//$now = explode(' ', $dt);
		return $dt;
	}
}