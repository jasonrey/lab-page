<?php
!defined('SERVER_EXEC') && die('No access.');

class AboutView extends View
{
	public $css = array('about');
	public $js = array('about');

	public function main()
	{
		$this->set('backgroundPattern', '1001000110010111011001101100110111110000010101111101111111001011011001100100');
		$this->set('hideHeader', true);
		$this->set('pagetitle', 'Hello World');

		$twitterHelper = Lib::helper('twitter');

		$tweet = $twitterHelper->getLatestTweet('jasonkeorey');

		$this->set('tweet', $tweet);

		$now = new DateTime();

		$currentDay = (int) $now->format('j');
		$currentMonth = (int) $now->format('n');
		$startYear = $endYear = $currentYear = (int) $now->format('Y');

		if ($currentMonth < 7 || ($currentMonth === 7 && $currentDay < 10)) {
			$startYear = $currentYear - 1;
		} else {
			$endYear = $currentYear + 1;
		}

		$startDate = new DateTime($startYear . '-07-10');
		$endDate = new DateTime($endYear . '-07-10');

		$totalDays = ($endDate->format('U') - $startDate->format('U')) / (60*60*24);
		$elapsedDays = floor(($now->format('U') - $startDate->format('U')) /  (60*60*24));

		$expPercentage = floor(($elapsedDays / $totalDays) * 100);

		$level = $currentYear - 1988;

		$this->set('expPercentage', $expPercentage);
		$this->set('level', $level);
	}
}
