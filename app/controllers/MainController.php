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
 }