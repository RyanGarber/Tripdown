<?php
namespace RyanGarber\Tripdown;
require('../vendor/autoload.php');
use RyanGarber\Tripdown\Tripdown;
$tripdown = new Tripdown();
// Standalone link should become iframe
echo($tripdown->text('https://www.youtube.com/watch?v=jNQXAC9IVRw'));
