<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.hamburger-menu-lines .hamburger-menu-line-middle {
  transition: opacity .3s;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-middle {
  opacity: 0;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top,
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom {
  transform: translateY(0);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top::before {
  transform: rotate(45deg);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transform: rotate(-45deg);
}</code>
