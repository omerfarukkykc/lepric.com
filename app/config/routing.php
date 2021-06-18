<?php


//Default
{
    App::get('/',false);
    App::get('/404',false,function(){
        View::renderLayout("login","default","404");
    });
    App::get('/401',false,function(){
        View::renderLayout("login","default","401");
    });
    App::get('/default/blocked', false);
    App::get('/default/contactus', false);

}




?>