<?php
// if(!r::is_ajax()) notFound();
header('Content-type: application/json; charset=utf-8');

echo $page->toJson();


?>
