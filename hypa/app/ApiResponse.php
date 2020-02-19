<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiResponse 
{
        //status: 200 =success , 400 = error
        public static $SUCCESS = 200;
        public static $ERROR = 400;
        public $status;
        public $message;
        public $data;
    
    
        public function __construct($status,$message,$data=null){
           $this->status=$status;
           $this->message=$message;
           $this->data=$data;
        }
    
        public function getStatus(){
           return $this->status;
        }
    
        public function getMessage(){
           return $this->message;
        }
    
        public function getData(){
           return $this->data;
        }
}
