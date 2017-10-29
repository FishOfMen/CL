<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Team;
use Illuminate\Support\Facades\Session;

class teamController extends Controller
{
    public function index(){

      $data = Team::with([
        'user',
        'league'
      ])->get();

        return view('teams\teams')->with('data', $data);
    }

    public function create(){

        if (Session::has('User')) {
            if (Session::get('User') == 'Guest'){

                Session::flash('error', 'Please sign in to create a team');

                return redirect('/teams');
            } else {
                $leagues = League::select('id', 'name')
                    ->get();

                return view('teams\create-team')->with('leagues', $leagues);
            }
        } else {
            Session::flash('error', 'Please sign in to create a team');

            return redirect('/teams');
        }
    }

    public function store(Request $request){

        $team_exists = Team::where('team_name', '=', $request->team_name)->first();

        if ($team_exists == null){
            if ($request->team_name == null || $request->league == null){

                Session::flash('error', 'Please fill in all fields');

                return redirect()->back();

            }   else {

                $owner_id = Session::get('User');

                $team = new Team;

                $team->team_name = $request->team_name;
                $team->league_id = $request->league;
                $team->owner_id = $owner_id;

                $team->save();

                return redirect('/teams');
            }
        } else {

            Session::flash('error', 'Team name already exists');

            return redirect()->back();
        }

    }
}
