<?php

declare(strict_types=1);
require_once "A.php";
require_once "B.php";
require_once "C.php";
require_once "I.php";

class Demo{
    /**
     * A
     */
    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . '<br>';
        return new A;
    }

    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . '<br>';
        return new B;
    }

    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . '<br>';
        return new C;
    }


    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . '<br>';
        return new I;
    }
    public function typeAReturnNull(): A
    {
        echo __FUNCTION__ . '<br>';
        return null;
    }

    /**
     * B
     */

     public function typeBReturnA(): B
     {
         echo __FUNCTION__ . '<br>';
         return new A;
     }

     public function typeBReturnB(): B
     {
         echo __FUNCTION__ . '<br>';
         return new B;
     }

     public function typeBReturnC(): B
     {
         echo __FUNCTION__ . '<br>';
         return new C;
     }
     public function typeBReturnI(): B
     {
         echo __FUNCTION__ . '<br>';
         return new I;
     }

     public function typeBReturnNull(): B
     {
         echo __FUNCTION__ . '<br>';
         return null;
     }

     /**
      * C
      */

      public function typeCReturnA(): C
     {
         echo __FUNCTION__ . '<br>';
         return new A;
     }

     public function typeCReturnB(): C
     {
         echo __FUNCTION__ . '<br>';
         return new B;
     }

     public function typeCReturnC(): C
     {
         echo __FUNCTION__ . '<br>';
         return new C;
     }

     public function typeCReturnI(): C
      {
          echo __FUNCTION__ . '<br>';
          return new I;
      }

     public function typeCReturnNull(): C
     {
         echo __FUNCTION__ . '<br>';
         return null;
     }


     /**
      * I
      */

      public function typeIReturnA(): I
      {
          echo __FUNCTION__ . '<br>';
          return new A;
      }

      public function typeIReturnB(): I
      {
          echo __FUNCTION__ . '<br>';
          return new B;
      }

      public function typeIReturnC(): I
      {
          echo __FUNCTION__ . '<br>';
          return new C;
      }

      public function typeIReturnI(): I
      {
          echo __FUNCTION__ . '<br>';
          return new I;
      }
      public function typeIReturnNull(): I
      {
          echo __FUNCTION__ . '<br>';
          return null;
      }

      /**
       * null
       */

       public function typeNullReturnA(): null
     {
         echo __FUNCTION__ . '<br>';
         return new A;
     }

     public function typeNullReturnB(): null
     {
         echo __FUNCTION__ . '<br>';
         return new B;
     }

     public function typeNullReturnC(): null
     {
         echo __FUNCTION__ . '<br>';
         return new C;
     }

     public function typeNullReturnI(): null
     {
         echo __FUNCTION__ . '<br>';
         return new I;
     }

     public function typeNullReturnNull(): null
     {
         echo __FUNCTION__ . '<br>';
         return null;
     }
}

$ex = new Demo();
//$ex->typeAReturnA();
//$ex->typeAReturnB();
// $ex->typeAReturnC();
// $ex->typeAReturnI();
// $ex->typeAReturnNull();


// $ex->typeBReturnA();
// $ex->typeBReturnB();
// $ex->typeBReturnC();
// $ex->typeBReturnI();
// $ex->typeBReturnNull();

// $ex->typeCReturnA();
// $ex->typeCReturnB();
// $ex->typeCReturnC();
// $ex->typeCReturnI();
// $ex->typeCReturnNull();

// $ex->typeIReturnA();
// $ex->typeIReturnB();
// $ex->typeIReturnC();
// $ex->typeIReturnI();
// $ex->typeIReturnNull();

// $ex->typeNullReturnA();
// $ex->typeNullReturnB();
// $ex->typeNullReturnC();
// $ex->typeNullReturnI();
// $ex->typeNullReturnNull();


?>