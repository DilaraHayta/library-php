<?php namespace App\Http\Controllers;
use App\Book;
use App\User;
use Illuminate\Support\Facades\View;

class UserController extends Controller {
    public function home(){
        $user=User::find(1);
        //$books=Book::where('user_id','=',$user->id)->get();

        $books=$user->book;

        return View::make('home',compact('books'));
    }

    public function getLogin(){
        return View::make('login');
    }

    public function postLogin(){
        //validate user input

        //attemp to login user

    }

    public function getRegister(){
        return View::make('register');
    }

    public function postRegister(){
        //validate user input

        //attemp to register user

    }

}