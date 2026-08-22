<?php


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

        ];

protected 
    $db = 'DB';
protected 
    $table = 'users';
protected 
    $primary = 'id';    // name of the primary key (auto-created), default: id


}