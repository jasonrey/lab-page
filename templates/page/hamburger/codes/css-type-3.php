<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.hamburger-menu-lines .hamburger-menu-line-top::before,
.hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transform-origin: right;
}
.hamburger-menu.active .hamburger-menu-lines {
  transform: rotate(180deg);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top,
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom {
  transform: translateY(0);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top::before {
  transform: rotate(45deg) scaleX(0.5);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transform: rotate(-45deg) scaleX(0.5);
}</code>
