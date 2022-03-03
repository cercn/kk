<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::all();
        return view('admin.pages.index',['pages'=>$pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), Page::$rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->withErrors($errors)->withInput();
        }


        $page = new Page;
        $page->description = $request->description;
        $page->title = $request->title;
        $page->save();

        session()->flash('success','nouvelle question enregistrée');

        return redirect()->route('pages.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit',['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Page::$rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->withErrors($errors)->withInput();
        }


        $page = Page::find($id);
        $page-> question = $request->question;
        $page-> reponse = $request->reponse;
        $page->save();

        session()->flash('success','Question '.$page->id.' modifiée avec success');

        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::destroy($id);
        return redirect()->route('pages.index');
    }
}
