<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex02 extends AbsA, AbsB implements Interface1, Interface2, Interface3 {   
    
    function NotDeclare(){
        echo 'Abstract 01 no body from Ex01';
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


$ex = new Ex02();
$ex -> inter1();

// $ex01->func_from_Int1();
   


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
