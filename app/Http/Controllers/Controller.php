<?php

namespace App\Http\Controllers;

abstract class Controller
{
   //
}

class UserController extends Controller{
    public function index(){
        $user = User::paginate();

        return view(view:'user.index', compact(var_name:'users'));
    }
}
