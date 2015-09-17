<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.hamburger-menu {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 48px;
  margin: 12px;
  cursor: pointer;
}
.hamburger-menu .hamburger-menu-lines {
  position: absolute;
  width: 100%;
  top: 23px;
  transition: all .3s;
}
.hamburger-menu .hamburger-menu-lines .hamburger-menu-line {
  position: absolute;
  top: 0;
  left: 0;
  height: 2px;
  width: 100%;
  display: block;
  transition: all .3s;
}
.hamburger-menu .hamburger-menu-lines .hamburger-menu-line::before {
  content: '';
  height: 100%;
  width: 100%;
  background-color: #e57373;
  display: block;
  transition: all .3s;
}
.hamburger-menu .hamburger-menu-lines .hamburger-menu-line-top {
  transform: translateY(-16px);
}
.hamburger-menu .hamburger-menu-lines .hamburger-menu-line-bottom {
  transform: translateY(16px);
}
.hamburger-menu.active .hamburger-menu-lines .hamburger-menu-line::before {
  background-color: #d32f2f;
}</code>
