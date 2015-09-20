<?php
!defined('SERVER_EXEC') && die('No access.');
?>
<code>.radial-menu {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 48px;
  margin: 48px 64px;
}
.radial-menu .radial-menu-items {
  position: absolute;
  top: 8px;
  left: 8px;
  width: 32px;
  height: 32px;
}
.radial-menu .radial-menu-items .radial-menu-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  cursor: pointer;
  background-color: #f44336;
  box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.2);
  transition-property: transform, opacity;
  transition-duration: 200ms;
  opacity: 0.8;
}
.radial-menu .radial-menu-items .radial-menu-item:hover {
  opacity: 1;
}
.radial-menu .radial-menu-toggle {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 48px;
  cursor: pointer;
  background-color: #ef5350;
  border-radius: 50%;
  box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.2);
  transition: all .2s;
}
.radial-menu .radial-menu-toggle:hover {
  background-color: #f44336;
}</code>
