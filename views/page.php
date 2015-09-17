<?php
!defined('SERVER_EXEC') && die('No access.');

class PageView extends View
{
	public $css = array();
	public $js = array();

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

		$this->css[] = $slug;
		$this->js[] = $slug;

		$page = $this->getPages()->$slug;

		$this->set('page', $page);
		$this->set('pagetitle', $page->title);

		$content = $this->loadTemplate($slug . '/content');

		$this->set('content', $content);
	}
}
