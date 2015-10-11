'use strict'
$ ->
	$timelineJob = $ '.timeline-job'
	$timelinePosition = $ '.timeline-position'
	$timelineItemBox = $ '.timeline-item-box'
	$positionItemBox = $timelinePosition.find '.timeline-item-box'
	$jobItemBox = $timelineJob.find '.timeline-item-box'
	$timelineBarDot = $ '.timeline-bar-dot'
	$timelineBarSegment = $ '.timeline-bar-segment'

	$timelineItemBox.on 'mouseover', ->
		item = $ @
		segmentsData = item.attr 'data-segments'
		segments = segmentsData.split ','
		jobsData = item.attr 'data-job'
		jobs = if jobsData? then jobsData.split ',' else []
		positionsData = item.attr 'data-position'
		positions = if positionsData? then positionsData.split ',' else []

		$timelineBarDot.removeClass 'active'
		$timelineBarSegment.removeClass 'active'

		$.each segments, (i, segment) ->
			segment = parseInt segment
			$timelineBarDot.eq(segment).addClass 'active'
			$timelineBarDot.eq(segment + 1).addClass 'active'
			$timelineBarSegment.eq(segment).addClass 'active'

		$.each jobs, (i, job) ->
			$jobItemBox.eq(job).addClass 'active'

		$.each positions, (i, position) ->
			$positionItemBox.eq($positionItemBox.length - position - 1).addClass 'active'

	$timelineItemBox.on 'mouseout', ->
		$timelineItemBox.removeClass 'active'
		$timelineBarDot.removeClass 'active'
		$timelineBarSegment.removeClass 'active'
