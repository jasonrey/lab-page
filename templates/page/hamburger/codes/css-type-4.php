<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.hamburger-menu-lines .hamburger-menu-line-top::before {
  transform-origin: left bottom;
}
.hamburger-menu-lines .hamburger-menu-line-middle::before {
  transform-origin: right bottom;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top {
  transform: translateY(16px) translateX(1px);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top::before {
  transform: rotate(-60deg);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-middle {
  transform: translateY(16px) translateX(-1px);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-middle::before {
  transform: rotate(60deg);
}</code>
