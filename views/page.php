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

		if (file_exists(Config::getBasePath() . '/assets/css/' . $slug . '.' . (Config::env() === 'development' ? 'less' : 'css'))) {
			$this->css[] = $slug;
		}

		if (file_exists(Config::getBasePath() . '/assets/js/' . $slug . '.' . (Config::env() === 'development' ? 'coffee' : 'js'))) {
			$this->js[] = $slug;
		}

		$page = $this->getPages()->$slug;

		$this->set('slug', $slug);
		$this->set('page', $page);
		$this->set('pagetitle', $page->title);
		$this->set('pagedate', $page->date);

		$content = $this->loadTemplate($slug . '/content');

		$this->set('content', $content);
	}
}
