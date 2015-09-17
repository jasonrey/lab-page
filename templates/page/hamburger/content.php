<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="demo">
	<div class="hamburger-items">
		<div class="hamburger-menu hamburger-menu-1" data-event="click" data-toggle="active">
			<div class="hamburger-menu-lines">
				<span class="hamburger-menu-line hamburger-menu-line-top"></span>
				<span class="hamburger-menu-line hamburger-menu-line-middle"></span>
				<span class="hamburger-menu-line hamburger-menu-line-bottom"></span>
			</div>
		</div>

		<div class="hamburger-menu hamburger-menu-2" data-event="click" data-toggle="active">
			<div class="hamburger-menu-lines">
				<span class="hamburger-menu-line hamburger-menu-line-top"></span>
				<span class="hamburger-menu-line hamburger-menu-line-middle"></span>
				<span class="hamburger-menu-line hamburger-menu-line-bottom"></span>
			</div>
		</div>

		<div class="hamburger-menu hamburger-menu-3" data-event="click" data-toggle="active">
			<div class="hamburger-menu-lines">
				<span class="hamburger-menu-line hamburger-menu-line-top"></span>
				<span class="hamburger-menu-line hamburger-menu-line-middle"></span>
				<span class="hamburger-menu-line hamburger-menu-line-bottom"></span>
			</div>
		</div>

		<div class="hamburger-menu hamburger-menu-4" data-event="click" data-toggle="active">
			<div class="hamburger-menu-lines">
				<span class="hamburger-menu-line hamburger-menu-line-top"></span>
				<span class="hamburger-menu-line hamburger-menu-line-middle"></span>
				<span class="hamburger-menu-line hamburger-menu-line-bottom"></span>
			</div>
		</div>
	</div>
</div>

<div class="sample-codes">
	<div class="sample-types">
		<div class="sample-type active"><h4 class="sample-code-type">HTML</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">CSS - Base</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">CSS - Type 1</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">CSS - Type 2</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">CSS - Type 3</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">CSS - Type 4</h4></div>
	</div>

	<div class="sample-contents">
		<div class="sample-content active">
			<pre data-language="html"><?php echo $this->loadTemplate('hamburger/codes/html'); ?></pre>
		</div>
		<div class="sample-content">
			<pre data-language="css"><?php echo $this->loadTemplate('hamburger/codes/css-base'); ?></pre>
		</div>
		<div class="sample-content">
			<pre data-language="css"><?php echo $this->loadTemplate('hamburger/codes/css-type-1'); ?></pre>
		</div>
		<div class="sample-content">
			<pre data-language="css"><?php echo $this->loadTemplate('hamburger/codes/css-type-2'); ?></pre>
		</div>
		<div class="sample-content">
			<pre data-language="css"><?php echo $this->loadTemplate('hamburger/codes/css-type-3'); ?></pre>
		</div>
		<div class="sample-content">
			<pre data-language="css"><?php echo $this->loadTemplate('hamburger/codes/css-type-4'); ?></pre>
		</div>
	</div>
</div>
