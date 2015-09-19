<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div id="about">
	<div class="section section-header">
		<div class="section-background">
			<div class="section-background-pattern"><?php echo str_repeat($backgroundPattern, 100); ?></div>
			<div class="section-background-overlay"></div>
		</div>
		<div class="section-content">
			<div class="page-title">
				<!-- <h2>jsonobject.io</h2> -->
				<h1>Hello World</h1>
			</div>
		</div>
	</div>
	<div class="section section-intro">
		<div class="section-background">
			<div class="section-background-image"></div>
		</div>
		<div class="section-content">
			<div class="container">
				<h3 class="name">Jason Rey</h3>
				<h4 class="subtitle">A developer at heart, with a touch of musician.</h4>
				<div class="social-links">
					<a href="https://www.facebook.com/jasonkeorey" class="social-link" target="_blank"><i class="icon icon-facebook"></i></a>
					<a href="https://twitter.com/jasonkeorey" class="social-link" target="_blank"><i class="icon icon-twitter"></i></a>
					<a href="https://my.linkedin.com/in/jasonrey" class="social-link" target="_blank"><i class="icon icon-linkedin"></i></a>
					<a href="https://github.com/jasonrey" class="social-link" target="_blank"><i class="icon icon-github"></i></a>
				</div>

				<div class="latest-tweet-frame">
					<div class="latest-tweet">
						<p class="tweet-content"><?php echo $tweet->text; ?></p>
						<div class="tweet-meta">
							<a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>" target="_blank" class="tweet-user">@</a>
							<span class="separator">|</span>
							<a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>/status/<?php echo $tweet->id; ?>" target="_blank" class="tweet-date"><?php echo date_create($tweet->created_at)->format('d M Y'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section section-intro-2">
		<div class="section-content">
			<div class="container">
				<p>People call me the <span class="highlight">"Jays"</span> of all trades.</p>
				<p>As an Electronics Engineering student, I may not have a strict IT background, but I am a self-taught developer. Disciplined and independent, I learn as I go from projects that I have no prior knowledge. I do not believe in "by-the-book" programming. Logic is the key, while languages are secondary.</p>
			</div>
		</div>
	</div>

	<div class="section section-tags">
		<div class="section-content">
			<div class="container">
				<ul class="about-tags about-tags-main">
					<li class="about-tag tag-html">HTML</li>
					<li class="about-tag tag-css">CSS</li>
					<li class="about-tag tag-js">JavaScript</li>
				</ul>
				<ul class="about-tags about-tags-sub">
					<li class="about-tag tag-jade">Jade</li>
					<li class="about-tag tag-less">LESS</li>
					<li class="about-tag tag-coffeescript">CoffeeScript</li>
					<li class="about-tag tag-angular">AngularJS</li>
					<li class="about-tag tag-jquery">jQuery</li>
				</ul>
				<ul class="about-tags about-tags-main">
					<li class="about-tag tag-php">PHP</li>
					<li class="about-tag tag-nodejs">NodeJS</li>
				</ul>
				<ul class="about-tags about-tags-sub">
					<li class="about-tag tag-python">Python</li>
					<li class="about-tag tag-ruby">Ruby</li>
					<li class="about-tag tag-shell">Shell</li>
					<li class="about-tag tag-swift">Swift</li>
				</ul>
				<ul class="about-tags about-tags-main">
					<li class="about-tag tag-apache">Apache</li>
					<li class="about-tag tag-sql">SQL</li>
				</ul>
				<ul class="about-tags about-tags-sub">
					<li class="about-tag tag-git">Git</li>
					<li class="about-tag tag-mercurial">Mercurial</li>
				</ul>
				<ul class="about-tags about-tags-main">
					<li class="about-tag tag-illustrator">Illustrator</li>
					<li class="about-tag tag-photoshop">Photoshop</li>
				</ul>
				<ul class="about-tags about-tags-sub">
					<li class="about-tag tag-others">Anything else?</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="section section-footer">
		<div class="section-content">
			<div class="container">
				<p><a href="http://jasonrey.com">jasonrey.com</a> <span class="separator">|</span> <a href="http://jsonobject.io">jsonobject.io</a></p>
			</div>
		</div>
	</div>
</div>
