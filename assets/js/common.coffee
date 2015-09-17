'use strict'

$ ->
	$window = $ window
	$body = $ 'body'
	$menuButton = $ '.menu-button'
	$menuOverlay = $ '.menu-overlay'

	$menuButton.on 'click', ->
		$body.toggleClass 'show-menu'

	$menuOverlay.on 'click', ->
		$body.removeClass 'show-menu'

	headerShrinkImplemented = false
	headerShrinkHandler = (ev) ->
		$body.toggleClass 'shrink-header', window.pageYOffset > 125

	if $window.height() > 750 || $window.width() > 760
		headerShrinkImplemented = true
		$window.on 'scroll', headerShrinkHandler

	$window.on 'resize', ->
		if $window.height() > 750
			unless headerShrinkImplemented
				headerShrinkImplemented = true
				$window.on 'scroll', headerShrinkHandler
		else
			if headerShrinkImplemented
				$body.removeClass 'shrink-header'
				headerShrinkImplemented = false
				$window.off 'scroll', headerShrinkHandler

	$body.on 'click', '[data-event="click"]', (ev) ->
		button = $ this
		classname = button.data 'toggle'

		button.toggleClass classname
