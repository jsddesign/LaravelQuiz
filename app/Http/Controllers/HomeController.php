<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Question;
use App\Http\Requests;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = DB::select('select * from content');
        return view('home', ['cont'=>$cont]);
    }

    public function quiz()
    {   
        $cat = Category::all();
        return view('quiz', ['categories' => $cat]);
    }

    public function quizplay($id)
    {   
        $quests = DB::select('select * from questions where questionqategory = ?',[$id]);
        return view('quizplay', ['questions' => $quests]);
    }

    public function quizend($res)
    {   
        return view('quizend',compact('res'));

    }

    

}
