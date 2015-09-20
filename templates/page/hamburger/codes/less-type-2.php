<?php
!defined('SERVER_EXEC') && die('No access.');
?>
.hamburger-menu {
  .hamburger-menu-lines {
    .hamburger-menu-line-top, .hamburger-menu-line-bottom {
      transition-delay: @animationDuration / 2;

      &::before {
        transition-delay: 0s;
      }
    }
  }

  &.active {
    .hamburger-menu-lines {
      transform: rotate(90deg);

      .hamburger-menu-line-middle {
        opacity: 0;
      }

      .hamburger-menu-line-top, .hamburger-menu-line-bottom {
        transform: translateY(0);
        transition-delay: 0s;

        &::before {
          transition-delay: @animationDuration / 2;
        }
      }

      .hamburger-menu-line-top {
        &::before {
          transform: rotate(45deg);
        }
      }

      .hamburger-menu-line-bottom {
        &::before {
          transform: rotate(-45deg);
        }
      }
    }
  }
}
