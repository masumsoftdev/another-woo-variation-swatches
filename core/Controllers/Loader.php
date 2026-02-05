<?php
namespace AnotherWooVariation\Core\Controllers;

// Exit if accessed directly
if (!defined('ABSPATH')) { exit; }

class Loader{
    public function __construct(){
        new AdminMenu();
        new Enqueue();

    }
}