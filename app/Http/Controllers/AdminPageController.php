<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('admin.index-page',compact('pages'));
    }


    public function create()
    {
        return view('admin.create-page');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $user->pages()->create($input);
        return redirect('/admin/page/create');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.edit-page',compact('page'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        Auth::user()->pages()->whereId($id)->first()->update($input);
        return redirect('admin/page');
    }


    public function destroy($id)
    {

    }

}
