<?php

namespace App\Http\Controllers;

use App\Models\People as ModelsPeople;
use Illuminate\Http\Request;
//use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
//use App\People;
use App\Models\People;
use App\Models\Post;


class MainController extends Controller
{
    //

    function main(){
        return view('welcome');
    }

    function features(){
        return view('features');
    }

    function contact(){
        return view('contact');
    }

    function allPeople(){
        //return (DB::table('people')->where('id',1)->get());
        //return (DB::table('people')->where('id','>',1)->get());
        //return (DB::table('people')->where('id','>',1)->limit(1)->get());
        //return ((array) DB::table('people')->where('id','>',1)->first());
        //return ( DB::table('people')->where('id','>',1)->orderBy('id','desc')->limit(3)->get());

       // return ( DB::table('people')->where('id','>',1)->orderBy('id','desc')->limit(3)->get(['id','name']));
       /* return ( DB::table('people')
       ->select(['id','name'])
        ->where('id','>',2)
        ->where('id','<',4)
        ->orderBy('id','desc')
        ->limit(3)
        ->get(['id','name']));*/

       return (DB::select("select id,name from people"));
    }


    function testModel(){
       // $people = People::all();
       //$people = People::all()->take(2);
       //$people = People::all()->skip(1)->take(2);
       //$people = People::all()->skip(1)->take(2);
       ///$people = People::find(1);
       //$people = People::where('id','>',1)->where('id','<',4)->get();
       //$people = People::where('id','>',1)->count();
      // $person  = People::whereEmail('mdfarid@gmail.com')->get();
      // $person  = People::whereEmail('mdfarid@gmail.com')->first()->displayNameandEmail();

      //update korar jonno
    //    $person  = People::find(1);
    //    $person->name = "Farid Uddin updated";
    //    $person->save();
    //    $person = $person->fresh();
       // $person  = People::find(1);
        // $person->addjr();
        // $person->fresh();

        //join query

        $person  = People::find(1);

       // $post = $person->posts();


        return $person;
    }
}
