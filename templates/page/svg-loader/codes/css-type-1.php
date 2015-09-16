<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>@keyframes loader-1 {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  80% {
    transform: scale(1);
    opacity: 0;
  }
}
.loader-item {
  animation-name: loader-1;
}
.loader-item.loader-item-1 {
  stroke-width: 1;
  stroke: #000000;
  fill: #ffffff;
}
.loader-item.loader-item-2 {
  fill: #000000;
  animation-delay: .3s;
}</code>
