<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = Code::latest()->paginate(5);

        return view('code.index')->with('code', $code);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'code' => 'required',
                'language' => 'required',
            ]);

        Code::create($request->all());

        return redirect()->route('code.index')->with('success', 'Code added to database successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        return view('code.show', compact('code'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        return view('code.edit', compact('code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'language' => 'required',
            ]);

        $code->update($request->all());

        return redirect()->route('code.index')->with('success', 'Code Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        $code->delete();

        return redirect()->route('code.index')->with('success' , 'Code deleted successfully');
    }

    public function filter_code($language){
        $code = Code::where('language', $language)->paginate(5);
        return view('code.index')->with('code', $code);
    }
}
