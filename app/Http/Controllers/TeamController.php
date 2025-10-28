<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function __construct() { $this->middleware('auth'); }

    // Toparlaryň sanawy (INDEX)
    public function index()
    {
        $teams = Team::latest()->paginate(10);
        return view('teams.index', compact('teams'));
    }

    // Täze döretmek formasy (CREATE)
    public function create()
    {
        return view('teams.create');
    }

    // Topary ýaz (STORE)
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:teams|max:150', 'city' => 'required']);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        // Logo ýükleme logikasy bu ýerde ýerleşmeli.

        Team::create($data);
        return redirect()->route('team.index')->with('success', 'Topar goşuldy!');
    }

    // Topary üýtget (UPDATE)
    public function update(Request $request, Team $team)
    {
        $request->validate(['name' => 'required|max:150|unique:teams,name,' . $team->id, 'city' => 'required']);

        $team->update($request->all());
        return redirect()->route('team.index')->with('success', 'Topar täzelendi!');
    }

    // Topary poz (DESTROY)
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Topar pozuldy.');
    }
}
