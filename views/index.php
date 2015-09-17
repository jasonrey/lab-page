<?php
!defined('SERVER_EXEC') && die('No access.');

class IndexView extends View
{
	public $css = array('index');

	public function main()
	{
		$pageview = Lib::view('page');
		$pages = $pageview->getPages();

		$this->set('pageview', $pageview);
		$this->set('pages', $pages);
	}
}
