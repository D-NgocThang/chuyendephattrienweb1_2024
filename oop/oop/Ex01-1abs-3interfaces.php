<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex01 extends AbsA implements Interface1, Interface2, Interface3 {   
    
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


$ex = new Ex01();
// $ex01->func_from_Int1();
$ex->Declare();
$ex->NotDeclare();
$ex->inter1();
$ex->inter2();
$ex->inter3();
   


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
