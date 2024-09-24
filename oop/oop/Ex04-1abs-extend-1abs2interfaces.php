<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');


// Single Abstract, Many Interfaces
abstract class Ex04_Abstract extends AbsA implements Interface1, Interface2 {   
    
    function NotDeclare(){
        echo 'Overriding Abstract 01 no body from Abs Ex04 <br/>';
    }
 
    function inter1(){
        echo 'Overrding Interface 01 from Abs Ex04';
    }

    function inter2(){
        echo 'Overrding Interface 02 from Abs Ex04';
    }

    public function func_from_Ex04(){
        echo 'Abstract Ex04';
    }
}

class Ex04 extends Ex04_Abstract{

}

$ex = new Ex04();
$ex->NotDeclare();
$ex->func_from_Ex04();


