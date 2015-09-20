<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="demo">
	<div class="radial-menus">
		<div class="radial-menu radial-menu-1">
			<ul class="radial-menu-items">
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
			</ul>
			<div class="radial-menu-toggle" data-event="click" data-toggle="active" data-target="parent">
				<div class="radial-menu-toggle-lines">
					<span class="radial-menu-toggle-line radial-menu-toggle-line-top"></span>
					<span class="radial-menu-toggle-line radial-menu-toggle-line-middle"></span>
					<span class="radial-menu-toggle-line radial-menu-toggle-line-bottom"></span>
				</div>
			</div>
		</div>

		<div class="radial-menu radial-menu-2">
			<ul class="radial-menu-items">
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
				<li class="radial-menu-item"></li>
			</ul>
			<div class="radial-menu-toggle" data-event="click" data-toggle="active" data-target="parent">
				<div class="radial-menu-toggle-lines">
					<span class="radial-menu-toggle-line radial-menu-toggle-line-top"></span>
					<span class="radial-menu-toggle-line radial-menu-toggle-line-middle"></span>
					<span class="radial-menu-toggle-line radial-menu-toggle-line-bottom"></span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="sample-codes">
	<div class="sample-types">
		<div class="sample-type active"><h4 class="sample-code-type">HTML</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Base</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 1</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 2</h4></div>
	</div>

	<div class="sample-contents">
		<div class="sample-content active">
			<pre><?php echo $this->loadTemplate('radial-menu/codes/html'); ?></pre>
		</div>
		<div class="sample-content">
			<pre><?php echo $this->loadTemplate('radial-menu/codes/less-base'); ?></pre>
		</div>
		<div class="sample-content">
			<pre><?php echo $this->loadTemplate('radial-menu/codes/less-type-1'); ?></pre>
		</div>
		<div class="sample-content">
			<pre><?php echo $this->loadTemplate('radial-menu/codes/less-type-2'); ?></pre>
		</div>
	</div>
</div>
