<?php
/**
 * Created by PhpStorm.
 * User: Toufiqul Islam Saju
 * Date: 2/23/2019
 * Time: 4:01 AM
 */

class Main extends Parents implements InterfaceExample
{
    public function add(){
        echo $this->i+10;
    }

    public function subs()
    {
        echo "My name is Toufiqul islam";
    }
}