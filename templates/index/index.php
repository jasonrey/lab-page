<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="main">
	<div class="container">
		<div class="posts">
			<?php foreach (array_reverse($page->getPages()) as $post) {
				echo $this->loadTemplate('post', array('post' => $post, 'page' => $page));
			} ?>
		</div>
	</div>
</div>
