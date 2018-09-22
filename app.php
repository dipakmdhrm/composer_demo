<?php
namespace ComposerDemo;

require_once "vendor/autoload.php";

use Rivsen\Demo\Hello;

$hello = new Hello('Dipak');
echo $hello->hello();
