<?php
!defined('SERVER_EXEC') && die('No access.');

class AboutView extends View
{
	public $css = array('about');

	public function main()
	{
		$this->set('backgroundPattern', '1001000110010111011001101100110111110000010101111101111111001011011001100100');
		$this->set('hideHeader', true);
		$this->set('pagetitle', 'Hello World');

		$twitterHelper = Lib::helper('twitter');

		$tweet = $twitterHelper->getLatestTweet('jasonkeorey');

		$this->set('tweet', $tweet);
	}
}
