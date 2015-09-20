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

	if $window.height() > 750
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

	$body.on 'click', '.sample-type', (ev) ->
		tab = $ this
		frame = tab.parents '.sample-codes'
		tabs = frame.find '.sample-type'
		index = tabs.index tab
		contents = frame.find '.sample-content'
		content = contents.eq index

		tabs.removeClass 'active'
		contents.removeClass 'active'
		tab.addClass 'active'
		content.addClass 'active'

	$body.on 'click', '[data-event="click"]', (ev) ->
		button = $ this
		classname = button.data 'toggle'
		target = button.data 'target'
		element = button

		switch target
			when 'parent'
				element = button.parent()
			when 'parents'
				parents = button.data 'parents'
				element = button.parents parents

		element.toggleClass classname
