(function() {
  'use strict';
  $(function() {
    var $jobItemBox, $positionItemBox, $timelineBarDot, $timelineBarSegment, $timelineItemBox, $timelineJob, $timelinePosition;
    $timelineJob = $('.timeline-job');
    $timelinePosition = $('.timeline-position');
    $timelineItemBox = $('.timeline-item-box');
    $positionItemBox = $timelinePosition.find('.timeline-item-box');
    $jobItemBox = $timelineJob.find('.timeline-item-box');
    $timelineBarDot = $('.timeline-bar-dot');
    $timelineBarSegment = $('.timeline-bar-segment');
    $timelineItemBox.on('mouseover', function() {
      var item, jobs, jobsData, positions, positionsData, segments, segmentsData;
      item = $(this);
      segmentsData = item.attr('data-segments');
      segments = segmentsData.split(',');
      jobsData = item.attr('data-job');
      jobs = jobsData != null ? jobsData.split(',') : [];
      positionsData = item.attr('data-position');
      positions = positionsData != null ? positionsData.split(',') : [];
      $timelineBarDot.removeClass('active');
      $timelineBarSegment.removeClass('active');
      $.each(segments, function(i, segment) {
        segment = parseInt(segment);
        $timelineBarDot.eq(segment).addClass('active');
        $timelineBarDot.eq(segment + 1).addClass('active');
        return $timelineBarSegment.eq(segment).addClass('active');
      });
      $.each(jobs, function(i, job) {
        return $jobItemBox.eq(job).addClass('active');
      });
      return $.each(positions, function(i, position) {
        return $positionItemBox.eq($positionItemBox.length - position - 1).addClass('active');
      });
    });
    return $timelineItemBox.on('mouseout', function() {
      $timelineItemBox.removeClass('active');
      $timelineBarDot.removeClass('active');
      return $timelineBarSegment.removeClass('active');
    });
  });

}).call(this);
