<?php


class MainController {
    function dashboard() {
        echo \Template::instance()->render('home.html');
}


}