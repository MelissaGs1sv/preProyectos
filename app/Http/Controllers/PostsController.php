<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
  

    // public function landingDos(){
    //     return View('LandingDos');
    // }

    public function plantilla(){
        return View('platilla');
    }
   
    public function cafePacas(){
        return View('cafePacas');
    }

    public function cafePacas2(){
        return View('cafePacas2');
    }

    public function store(Request $request)
    {

            // $post=new Post;
    
            // $post->nombre->input('nombre');
            // $post->correo->input('correo');
            // $post->empresa->input('empresa');
            // $post->telefono->input('telefono');
            // $post->save();
    
            // return $request->input('nombre');
        
    }

}
