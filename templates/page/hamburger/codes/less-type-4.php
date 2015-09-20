<?php
!defined('SERVER_EXEC') && die('No access.');
?>
.hamburger-menu {
  .hamburger-menu-lines {
    .hamburger-menu-line-top {
      &::before {
        transform-origin: left bottom;
      }
    }

    .hamburger-menu-line-middle {
      &::before {
        transform-origin: right bottom;
      }
    }
  }

  &.active {
    .hamburger-menu-lines {
      transform: translateY(@baseSize / 24);

      .hamburger-menu-line-top {
        transform: translate(@baseSize / 96, (@baseSize / 8));

        &::before {
          transform: rotate(-60deg);
        }
      }

      .hamburger-menu-line-middle {
        transform: translate(-@baseSize / 96, (@baseSize / 8));

        &::before {
          transform: rotate(60deg);
        }
      }
    }
  }
}
