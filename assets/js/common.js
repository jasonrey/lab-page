(function() {
  'use strict';
  $(function() {
    var $body, $menuButton, $menuOverlay, $window, headerShrinkHandler, headerShrinkImplemented;
    hljs.initHighlightingOnLoad();
    $window = $(window);
    $body = $('body');
    $menuButton = $('.menu-button');
    $menuOverlay = $('.menu-overlay');
    $menuButton.on('click', function() {
      return $body.toggleClass('show-menu');
    });
    $menuOverlay.on('click', function() {
      return $body.removeClass('show-menu');
    });
    headerShrinkImplemented = false;
    headerShrinkHandler = function(ev) {
      return $body.toggleClass('shrink-header', window.pageYOffset > 125);
    };
    if ($window.height() > 750) {
      headerShrinkImplemented = true;
      $window.on('scroll', headerShrinkHandler);
    }
    $window.on('resize', function() {
      if ($window.height() > 750) {
        if (!headerShrinkImplemented) {
          headerShrinkImplemented = true;
          return $window.on('scroll', headerShrinkHandler);
        }
      } else {
        if (headerShrinkImplemented) {
          $body.removeClass('shrink-header');
          headerShrinkImplemented = false;
          return $window.off('scroll', headerShrinkHandler);
        }
      }
    });
    $body.on('click', '.sample-type', function(ev) {
      var content, contents, frame, index, tab, tabs;
      tab = $(this);
      frame = tab.parents('.sample-codes');
      tabs = frame.find('.sample-type');
      index = tabs.index(tab);
      contents = frame.find('.sample-content');
      content = contents.eq(index);
      tabs.removeClass('active');
      contents.removeClass('active');
      tab.addClass('active');
      return content.addClass('active');
    });
    return $body.on('click', '[data-event="click"]', function(ev) {
      var button, classname, element, parents, target;
      button = $(this);
      classname = button.data('toggle');
      target = button.data('target');
      element = button;
      switch (target) {
        case 'parent':
          element = button.parent();
          break;
        case 'parents':
          parents = button.data('parents');
          element = button.parents(parents);
      }
      return element.toggleClass(classname);
    });
  });

}).call(this);
