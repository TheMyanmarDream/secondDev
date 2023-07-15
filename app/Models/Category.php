<?php
namespace App\Models;
use App\Models\Pricing;
use App\Models\Promotion;
class Category extends Item{
    use Pricing,Promotion;
   

   
    public $category = "Item";
    public function foo(){
        return $this->fooBar();
    }
    public function getFood($food){
        return $food;
    }
}