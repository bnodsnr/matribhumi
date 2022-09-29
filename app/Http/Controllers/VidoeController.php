<?php

namespace App\Http\Controllers;

use App\Models\Vidoe;
use Response;
use Illuminate\Http\Request;

class VidoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Vidoe::get();
        return view('videos.list',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = view('videos.add')->render();
        return Response::json(['status' => 200, 'view' => $view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'url'         => 'required',
            'status'      => 'numeric|nullable',
            'headline'    => 'required',
        ]);
        $validatedData['is_feature'] = !empty($request->is_feature) ? $request->is_feature : 0;
        Vidoe::create($validatedData);
        return redirect('/videos')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id     = $request->get('id');
        $row    = Vidoe::find($id);
        $view   = view('videos.edit',compact('row'))->render();
        return Response::json(['status' => 200, 'view' => $view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'url'       => 'required',
            'status'    => 'numeric|nullable',
            'headline'    => 'required',
            
        ]);
        $validatedData['is_feature'] = !empty($request->is_feature) ? $request->is_feature : 0;
        Vidoe::where('id', $id)->update($validatedData);
        return redirect('/videos')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

