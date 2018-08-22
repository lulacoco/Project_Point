<?php

namespace App\Http\Controllers;

use App\Group;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {
//        $groups = Group::all();
//        return view('groups', compact('groups'));
//
//        $groups = DB::table('groups')->get();
//        return view('pages.groups');

        return view('pages.groups', compact('groups'));
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
