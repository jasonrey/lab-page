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
		<div class="sample-type"><h4 class="sample-code-type">LESS - Base</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 1</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 2</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 3</h4></div>
		<div class="sample-type"><h4 class="sample-code-type">LESS - Type 4</h4></div>
	</div>

	<div class="sample-contents">
		<div class="sample-content active">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/html'); ?></code></pre>
		</div>
		<div class="sample-content">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/less-base'); ?></code></pre>
		</div>
		<div class="sample-content">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/less-type-1'); ?></code></pre>
		</div>
		<div class="sample-content">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/less-type-2'); ?></code></pre>
		</div>
		<div class="sample-content">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/less-type-3'); ?></code></pre>
		</div>
		<div class="sample-content">
			<pre><code><?php echo $this->loadTemplate('hamburger/codes/less-type-4'); ?></code></pre>
		</div>
	</div>
</div>
