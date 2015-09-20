<?php
!defined('SERVER_EXEC') && die('No access.');
?>
@color: #EF5350;
@color-highlight: #D32F2F;
@baseSize: 64px;

@itemSize: (@baseSize * 2) / 3;
@itemOddPosition: ((@baseSize + @itemSize) / 2) + (@baseSize - @itemSize);
@itemEvenPosition: round(sqrt(2 * pow(@itemOddPosition, 2)) / 2);

.radial-menu {
  position: relative;
  display: inline-block;
  width: @baseSize;
  height: @baseSize;
  margin: @baseSize (@baseSize + 16px);

  .radial-menu-items {
    position: absolute;
    top: (@baseSize - @itemSize) / 2;
    left: (@baseSize - @itemSize) / 2;
    width: @itemSize;
    height: @itemSize;

    .radial-menu-item {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      cursor: pointer;
      background-color: @color;
      box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.2);
      transition-property: transform, background-color;
      transition-duration: 200ms;

      &:hover {
        background-color: @color-highlight;
      }
    }
  }

  .radial-menu-toggle {
    position: relative;
    display: inline-block;
    width: @baseSize;
    height: @baseSize;
    cursor: pointer;
    background-color: @color;
    border-radius: 50%;
    box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.2);
    transition: all .2s;

    &:hover {
      background-color: @color-highlight;
    }
  }
}
