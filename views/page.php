<?php
!defined('SERVER_EXEC') && die('No access.');

class PageView extends View
{
	public function getPages()
	{
		static $posts;

		if (empty($posts)) {
			$file = Config::getBasePath() . '/posts.json';

			$contents = file_get_contents($file);

			$posts = json_decode($contents);
		}

		return $posts;
	}

	public function main()
	{
		$slug = Req::get('slug');

		$this->set('slug', $slug);
	}
}
