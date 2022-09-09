<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Rol;
class UserApiController extends Controller
{
    public function getAllUsers(){
        ///validar quien pide
        return User::all();
    }
    public function getAllRoles(){
        ///validar quien pide
        return Rol::all();
    }
}
