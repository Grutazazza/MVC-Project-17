<?php

namespace Controllers;

use Models\Post;

class PostController extends BaseController
{
    public  function create(){
        return view('Posts/create');
    }
    public  function PostCreate(){
        $errors=[];
        if(!isset($_POST['name']))
            $errors['name'][]="Нет пoля name";
        if(!isset($_POST['description']))
            $errors['description'][]="Нет пoля description";
        if(!has_session('id'))
            $errors['auth'][]='Не авторизорован';
        if($errors!=[])
            return view("create",compact('errors'));

        $post = new Post();
        $_POST['user_id']=session('id');
        $post->create($_POST);
    }
}