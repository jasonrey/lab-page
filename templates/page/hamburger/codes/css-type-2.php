<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.hamburger-menu-lines .hamburger-menu-line-top,
.hamburger-menu-lines .hamburger-menu-line-bottom {
  transition-delay: .15s;
}
.hamburger-menu-lines .hamburger-menu-line-top::before,
.hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transition-delay: 0s;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-middle {
  opacity: 0;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top,
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom {
  transform: translateY(0);
  transition-delay: 0s;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top::before,
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transition-delay: .15s;
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-top::before {
  transform: rotate(45deg);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line-bottom::before {
  transform: rotate(-45deg);
}</code>
