<?php

namespace App\Http\Controllers;

use App\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        $data = \App\Portfolio::get();
        $category = DB::table('categories')->get();
        $contact = DB::table('contacts')->get();
        $about = DB::table('about_us')->get();
        $team = DB::table('pages')->get();
        $lang = DB::table('langs')->get();

        $result = array(
            "portfolio"=> $data, /// на фотки надо поставить storage/folder
            "category"=>$category,
            "team"=>$team,
            "contact"=>$contact,
            "about"=>$about,
            "isRu"=>$lang
        );

        return view('welcome')->with(compact('result'));
    }


    public function getCategoryById($id){

        $portfolio = \App\Portfolio::where('category_id',$id)->get();
        $category = DB::table('categories')->get();
        $contact = DB::table('contacts')->get();
        $about = DB::table('about_us')->get();
        $team = DB::table('pages')->get();
        $lang = DB::table('langs')->get();

        $result = array(
            "portfolio"=> $portfolio, /// на фотки надо поставить storage/folder
            "category"=>$category,
            "team"=>$team,
            "contact"=>$contact,
            "about"=>$about,
            "isRu"=>$lang
        );
        return view('welcome')->with(compact('result'));
    }
    public function getPortfolio($id){

        $data = \App\Portfolio::find($id);
        $lang = DB::table('langs')->get();
        $category = DB::table('categories')->get();


        $result = array(
            "data"=>$data,
            "category"=>$category,
            "isRu"=>$lang
        );

        return view('detailed')->with(compact('result'));
//        return response()->json($data,200);
    }
    public function setLang($name){

        $data = \App\Portfolio::get();
        $category = DB::table('categories')->get();
        $contact = DB::table('contacts')->get();
        $about = DB::table('about_us')->get();
        $team = DB::table('pages')->get();

        if ($name == "en") {
            Lang::where('id',6)->update(array('is_ru'=>0));
        }else{
            Lang::where('id',6)->update(array('is_ru'=>1));
        }
        $lang_current = DB::table('langs')->get();

        $result = array(
            "portfolio"=> $data, /// на фотки надо поставить storage/folder
            "category"=>$category,
            "team"=>$team,
            "contact"=>$contact,
            "about"=>$about,
            "isRu"=>$lang_current
        );
        return view('welcome')->with(compact('result'));
    }
}
