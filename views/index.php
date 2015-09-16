<?php
!defined('SERVER_EXEC') && die('No access.');

class IndexView extends View
{
	public $css = array('index');

	public function main()
	{
		$page = Lib::view('page');

		$this->set('page', $page);
	}
}
