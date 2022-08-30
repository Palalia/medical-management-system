<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserApiController extends Controller
{
    public function getAllUsers(){
        ///validar quien pide
        return User::all();
    }
}
