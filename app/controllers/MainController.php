<?php


class MainController {
    function dashboard() {
        echo \Template::instance()->render('home.html');

    }

    function login() {
        echo \Template::instance()->render('login.html');
    }

    function register() {
        echo \Template::instance()->render('register.html');
    }

    function create_user(){
        $f3= \Base::instance();
        $user= new User;
        $post= $f3->get('POST');


// Grabbing the user information from the front-end and sending it to the user object-database
        $user->user_name=$f3->get('POST.user_name');
        $user->first_name=$f3->get('POST.first_name');
        $user->DOB=$f3->get('POST.DOB');
        $user->user_email=$f3->get('POST.user_email');
        $user->user_password=$f3->get('POST.user_password');


          if(  $f3->save()) {
            echo http_response_code(200);
            echo "Saving the data";
          } else {
            echo http_response_code(500);
            echo "Not Saved in the database";
          }
            
    }
 }