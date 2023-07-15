<?php
namespace App\Models;
use App\OOD\Foo;    
class Item implements Foo{
    public function bar(){
        return "Let drink alcohol";
    }
    public function test(){
        
    }
    protected function fooBar(){
        return "Foo bar";
    }
    private function privateFoo(){
        return "Private Foo";
    }
    public function displayFooBar(){
        return $this->privateFoo();
    }
    
}
