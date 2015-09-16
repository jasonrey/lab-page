<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div class="demo">
	<div class="svg-loader-frame">
		<div class="svg-loader svg-loader-type-1">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 52 45" class="svg-loader-item svg-loader-item-1">
				<path d="M26 0 L0 45 L52 45 Z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 52 45" class="svg-loader-item svg-loader-item-2">
				<path d="M26 0 L0 45 L52 45 Z" />
			</svg>
		</div>

		<div class="svg-loader svg-loader-type-2">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 52 45" class="svg-loader-item svg-loader-item-1">
				<path d="M26 0 L0 45 L52 45 Z" />
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 52 45" class="svg-loader-item svg-loader-item-2">
				<path d="M26 0 L0 45 L52 45 Z" />
			</svg>
		</div>
	</div>
</div>

<div class="sample-codes">
	<h4 class="sample-code-type">HTML</h4>
	<pre data-language="html"><?php echo $this->loadTemplate('svg-loader/codes/html'); ?></pre>

	<h4 class="sample-code-type">CSS - Base</h4>
	<pre data-language="css"><?php echo $this->loadTemplate('svg-loader/codes/css-base'); ?></pre>

	<h4 class="sample-code-type">CSS - Type 1</h4>
	<pre data-language="css"><?php echo $this->loadTemplate('svg-loader/codes/css-type-1'); ?></pre>

	<h4 class="sample-code-type">CSS - Type 2</h4>
	<pre data-language="css"><?php echo $this->loadTemplate('svg-loader/codes/css-type-2'); ?></pre>
</div>
