<?php
namespace App\Models;
class TestAnswer{
    public function __construct(){
        echo "The Myanmar Dream";
    }
    const CONSTANT = 'constant value';
    public static $my_static = 'static var';
    
    public static function getName() {
        return "The Myanmar Dream";
    }
    
    
}