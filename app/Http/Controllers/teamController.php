<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Team;

class teamController extends Controller
{
    public function index(){

      $data = Team::with([
        'user',
        'league'
      ])->get()->toArray();

        return view('teams\teams')->with('data', $data);
    }

    public function create(){
        return view('teams\create-team');
    }
}
