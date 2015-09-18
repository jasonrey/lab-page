<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<div id="about">
	<div class="section section-header">
		<div class="section-content">
			<div class="section-background">
				<div class="section-background-pattern"><?php echo str_repeat($backgroundPattern, 100); ?></div>
				<div class="section-background-overlay"></div>
			</div>
			<div class="page-title">
				<h2>jsonobject.io</h2>
				<h1>Hello World</h1>
			</div>
		</div>
	</div>
	<div class="section section-intro">
		<div class="container">
			<div class="section-content">
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
		<div class="container">
			<div class="section-content">
				<p>People call me the <span class="highlight">"Jays"</span> of all trades.</p>
				<p>As an Electronics Engineering student, I may not have a strict IT background, but I am a self-taught developer. Disciplined and independent, I learn as I go from projects that I have no prior knowledge. I do not believe in "by-the-book" programming. Logic is the key, while languages are secondary.</p>
			</div>
		</div>
	</div>
</div>
