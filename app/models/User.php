<?php

namespace Model;

class User extends \DB\Cortex {
   
    protected 
        $fieldConf = [
            'user_name' => [
               
                'type' => \DB\SQL\Schema::DT_VARCHAR256,
                'nullable' => false,
            ],

            'user_password' => [
                
                'type' => \DB\SQL\Schema::DT_VARCHAR512,
                'nullable' => false,
            ],

            'first_name' => [
                
                'type' => \DB\SQL\Schema::DT_VARCHAR256,
                'nullable' => false,

            ],

            'user_email' => [

                'type' => \DB\SQL\Schema::DT_VARCHAR256,
                'nullable' => false,           
                
            ],

            'DOB' => [

                'type' => \DB\SQL\Schema::DT_DATE,
                'nullable' => false, 
            ],

        ],


    $db = 'DB',
    $table = 'users',
    $primary = 'id';    // name of the primary key (auto-created), default: id


}