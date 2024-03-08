<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user(){

        //  $data = DB::table('databases')->where('id',2)->get();
         $data = DB::table('databases')->find(4);

// return $data;

            return view('welcome', ['id'=> $data]);

    }
}
?>
