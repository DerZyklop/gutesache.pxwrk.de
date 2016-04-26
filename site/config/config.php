<?php
if($_SERVER['SERVER_NAME'] == 'localhost') {
  c::set('debug', true);
} elseif($_SERVER['SERVER_NAME'] == 'der-zyklop.de') {
  c::set('debug', false);
}
?>
