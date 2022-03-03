<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs=Faq::all();
        return view('admin.faq.index',['faqs'=>$faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), Faq::$rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->withErrors($errors)->withInput();
        }


        $faq = new Faq;
        $faq-> question = $request->question;
        $faq-> reponse = $request->reponse;
        $faq->save();

        session()->flash('success','nouvelle question enregistrée');

        return redirect()->route('faqs.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.show',['faq' => $faq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.edit',['faq' => $faq]);
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
        $validator = Validator::make($request->all(), Faq::$rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->withErrors($errors)->withInput();
        }


        $faq = Faq::find($id);
        $faq-> question = $request->question;
        $faq-> reponse = $request->reponse;
        $faq->save();

        session()->flash('success','Question '.$faq->id.' modifiée avec success');

        return redirect()->route('faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq::destroy($id);
        return redirect()->route('faqs.index');
    }
}
