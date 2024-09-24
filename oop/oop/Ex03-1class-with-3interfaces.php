<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex03 extends A implements Interface1, Interface2, Interface3 {   
    
    function func_from_class1(){
        echo 'Overriding Class 01 from Ex03 <br/>';
    }
 
    function inter1()
    {
        echo 'A';
    }

    function inter2()
    {
        echo 'B';
        
    }

    function inter3()
    {
        echo 'C';
        
    }
}


$ex = new Ex03();
$ex->func_from_class1();
$ex->foo();


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
