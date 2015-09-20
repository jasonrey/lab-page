<?php
!defined('SERVER_EXEC') && die('No access.');
?>
.hamburger-menu {
  .hamburger-menu-lines {
    .hamburger-menu-line-top, .hamburger-menu-line-bottom {
      &::before {
        transform-origin: right;
      }
    }
  }

  &.active {
    .hamburger-menu-lines {
      transform: rotate(180deg);

      .hamburger-menu-line-top, .hamburger-menu-line-bottom {
        transform: translateY(0);
      }

      .hamburger-menu-line-top {
        &::before {
          transform: rotate(45deg) scaleX(0.6);
        }
      }

      .hamburger-menu-line-bottom {
        &::before {
          transform: rotate(-45deg) scaleX(0.6);
        }
      }
    }
  }
}
