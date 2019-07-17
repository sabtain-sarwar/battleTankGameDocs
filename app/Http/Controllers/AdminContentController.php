<?php

namespace App\Http\Controllers;

use App\TableOfContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContentController extends Controller
{
    public function index()
    {
        $contents = TableOfContent::paginate(5);
        return view('admin.content.index-content',compact('contents'));
    }


    public function create()
    {
        return view('admin.content.create-content');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $string = str_replace("&nbsp;", "", $input);
        $user = Auth::user();
        $user->tableOfContent()->create($string);
        return redirect('/content');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $content = TableOfContent::findOrFail($id);
        return view('admin.content.edit-content',compact('content'));
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $string = str_replace("&nbsp;", "", $input);
//        $data = array_map('trim',$input);

        Auth::user()->tableOfContent()->whereId($id)->first()->update($string);
        return redirect('/content');
    }


    public function destroy($id)
    {
//        $post = Post::findOrFail($id);
//        unlink(public_path() . $post->photo->file);
//        $post->delete();
//        return redirect('admin/posts');
    }
}
