<?php namespace App\Http\Controllers;
use App\Book;
use App\User;
use Illuminate\Support\Facades\View;

class UserController extends Controller {
    public function home(){
        $user=User::find(1);
        //$books=Book::where('user_id','=',$user->id)->get();

        $books=$user->book;

        return View::make('home')->with('books',$books);
    }

}