<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>@keyframes loader-1 {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  50% {
    transform: scale(1);
    opacity: 1;
  }
  75% {
    transform: scale(1);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
@keyframes loader-2 {
  0% {
    transform: scale(0);
    opacity: 1;
  }
  25% {
    transform: scale(0);
    opacity: 1;
  }
  75% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
.loader-item.loader-item-1 {
  fill: #000000;
  animation-name: loader-1;
}
.loader-item.loader-item-2 {
  fill: #ffffff;
  animation-name: loader-2;
}</code>
