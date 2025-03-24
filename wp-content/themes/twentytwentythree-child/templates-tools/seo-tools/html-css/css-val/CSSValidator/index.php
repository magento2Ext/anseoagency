<?php
require_once'Services/W3C/CSSValidator.php';
$v = new Services_W3C_CSSValidator();
$css='body{position:relative}.table code{font-size:13px;font-weight:400}.btn-outline{color:#563d7c;background-color:transparent;border-color:#563d7c}.btn-outline:hover,.btn-outline:focus,.btn-outline:active{color:#fff;background-color:#563d7c;border-color:#563d7c}.btn-outline-inverse{color:#fff;background-color:transparent;border-color:#cdbfe3}.btn-outline-inverse:hover,.btn-outline-inverse:focus,.btn-outline-inverse:active{color:#563d7c;text-shadow:none;background-color:#fff;border-color:#fff}.bs-docs-booticon{display:block;font-weight:500;color:#fff;text-align:center;cursor:default;background-color:#563d7c;border-radius:15%}.bs-docs-booticon-sm{width:30px;height:30px;font-size:20px;line-height:28px}.bs-docs-booticon-lg{width:144px;height:144px;font-size:108px;line-height:140px}.bs-docs-booticon-inverse{color:#563d7c;background-color:#fff}.bs-docs-booticon-outline{background-color:transparent;border:1px solid #cdbfe3}';
$result = $v->validateFragment($css);
echo "<pre>";
print_r($result);