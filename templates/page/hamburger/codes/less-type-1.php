<?php
!defined('SERVER_EXEC') && die('No access.');
?>
.hamburger-menu {
  .hamburger-menu-lines {
    .hamburger-menu-line-middle {
      transition: opacity @animationDuration;
    }
  }

  &.active {
    .hamburger-menu-lines {
      .hamburger-menu-line-middle {
        opacity: 0;
      }

      .hamburger-menu-line-top, .hamburger-menu-line-bottom {
        transform: translateY(0);
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
