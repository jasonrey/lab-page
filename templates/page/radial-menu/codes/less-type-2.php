<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.radial-menu {
  .radial-menu-items {
    .radial-menu-item {
      transform: scale(0);

      &:nth-child(1) {
        top: -@itemOddPosition;
        left: 0;
      }

      &:nth-child(2) {
        top: -@itemEvenPosition;
        left: -@itemEvenPosition;
      }

      &:nth-child(3) {
        top: 0;
        left: -@itemOddPosition;
      }

      &:nth-child(4) {
        top: @itemEvenPosition;
        left: -@itemEvenPosition;
      }

      &:nth-child(5) {
        top: @itemOddPosition;
        left: 0;
      }

      &:nth-child(6) {
        top: @itemEvenPosition;
        left: @itemEvenPosition;
      }

      &:nth-child(7) {
        top: 0;
        left: @itemOddPosition;
      }

      &:nth-child(8) {
        top: -@itemEvenPosition;
        left: @itemEvenPosition;
      }
    }
  }

  .radial-menu-toggle {
    .radial-menu-toggle-lines {
      .radial-menu-toggle-line-top {
        &::before {
          transform-origin: left bottom;
        }
      }

      .radial-menu-toggle-line-middle {
        &::before {
          transform-origin: right bottom;
        }
      }
    }
  }

  &.active {
    .radial-menu-items {
      .radial-menu-item {
        transform: scale(1);

        &:nth-child(2) {
          transition-delay: 100ms, 0s;
        }

        &:nth-child(3) {
          transition-delay: 200ms, 0s;
        }

        &:nth-child(4) {
          transition-delay: 300ms, 0s;
        }

        &:nth-child(5) {
          transition-delay: 400ms, 0s;
        }

        &:nth-child(6) {
          transition-delay: 500ms, 0s;
        }

        &:nth-child(7) {
          transition-delay: 600ms, 0s;
        }

        &:nth-child(8) {
          transition-delay: 700ms, 0s;
        }
      }
    }
  }
}
</code>
