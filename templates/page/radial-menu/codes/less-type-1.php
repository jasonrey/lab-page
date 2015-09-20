<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.radial-menu {
  &.active {
    .radial-menu-items {
      .radial-menu-item {
        &:nth-child(1) {
          transform: translate(0, -@itemOddPosition);
        }

        &:nth-child(2) {
          transform: translate(-@itemEvenPosition, -@itemEvenPosition);
          transition-delay: 100ms, 0s;
        }

        &:nth-child(3) {
          transform: translate(-@itemOddPosition, 0);
          transition-delay: 200ms, 0s;
        }

        &:nth-child(4) {
          transform: translate(-@itemEvenPosition, @itemEvenPosition);
          transition-delay: 300ms, 0s;
        }

        &:nth-child(5) {
          transform: translate(0, @itemOddPosition);
          transition-delay: 400ms, 0s;
        }

        &:nth-child(6) {
          transform: translate(@itemEvenPosition, @itemEvenPosition);
          transition-delay: 500ms, 0s;
        }

        &:nth-child(7) {
          transform: translate(@itemOddPosition, 0);
          transition-delay: 600ms, 0s;
        }

        &:nth-child(8) {
          transform: translate(@itemEvenPosition, -@itemEvenPosition);
          transition-delay: 700ms, 0s;
        }
      }
    }
  }
}
</code>
