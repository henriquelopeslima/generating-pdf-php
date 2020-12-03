<?php
 class User_model {
    private $id;
    private $cod;
    private $name;

     /**
      * User_model constructor.
      * @param $id
      * @param $cod
      * @param $name
      */
     public function __construct($id, $cod, $name)
     {
         $this->id = $id;
         $this->cod = $cod;
         $this->name = $name;
     }

     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return mixed
      */
     public function getCod()
     {
         return $this->cod;
     }

     /**
      * @param mixed $cod
      */
     public function setCod($cod)
     {
         $this->cod = $cod;
     }

     /**
      * @return mixed
      */
     public function getName()
     {
         return $this->name;
     }

     /**
      * @param mixed $name
      */
     public function setName($name)
     {
         $this->name = $name;
     }


 }