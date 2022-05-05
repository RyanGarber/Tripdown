# Tripdown
Extends ParsedownExtra. Links to images become images, YouTube links become embedded players, and tables get Bootstrap 4 classes.

## Install
Composer

    > composer require ryangarber/tripdown
    
Pure PHP

    <?php
    require('path/to/Parsedown.php');
    require('path/to/ParsedownExtra.php');
    require('src/Tripdown.php');
    
    
## Usage
Simply replace

    $parsedown = new Parsedown();

with

    $parsedown = new Tripdown();
