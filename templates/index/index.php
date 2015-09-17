<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="main">
	<div class="container">
		<div class="posts">
			<?php foreach ($pages as $pageslug => $page) {
				echo $this->loadTemplate('post', array('post' => $page, 'pageslug' => $pageslug, 'pageview' => $pageview));
			} ?>
		</div>
	</div>
</div>
