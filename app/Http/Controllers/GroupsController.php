<?php

namespace App\Http\Controllers;
use App\Group;
//use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = Group::all();
//        dd($groups);
        //$participants = json_decode($groups->participants);
        //$groups = Groups::paginate(10);
        return view('groups',compact('groups'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
