<?php
!defined('SERVER_EXEC') && die('No access.');
?>
@baseSize: 96px;
@lineHeight: 2px;
@animationDuration: 300ms;
@color: @red300;
@color-highlight: @red700;

.hamburger-menu {
  position: relative;
  display: inline-block;
  width: @baseSize;
  height: @baseSize;
  cursor: pointer;

  .hamburger-menu-lines {
    position: absolute;
    top: (@baseSize - @lineHeight) / 2;
    left: @baseSize / 4;
    width: @baseSize / 2;
    height: @lineHeight;
    transition: all @animationDuration;

    .hamburger-menu-line {
      position: absolute;
      top: 0;
      left: 0;
      height: @lineHeight;
      width: 100%;
      display: block;
      transition: all @animationDuration;

      &::before {
        content: '';
        height: 100%;
        width: 100%;
        background-color: @color;
        display: block;
        transition: all @animationDuration;
      }
    }

    .hamburger-menu-line-top {
      transform: translateY(-@baseSize / 8);
    }

    .hamburger-menu-line-bottom {
      transform: translateY(@baseSize / 8);
    }
  }

  &.active {
    .hamburger-menu-lines {
      .hamburger-menu-line {
        &::before {
          background-color: @color-highlight;
        }
      }
    }
  }
}
