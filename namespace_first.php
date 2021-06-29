<?php

    require "namespace_second.php";
    require "namespace_third.php";

    function wow(){
        echo "wow from first page";
    }
    use pro\name\command as cmd;
    $obj1=new cmd\product;
    $obj2=new test\product;
    $obj1->wow();
?>