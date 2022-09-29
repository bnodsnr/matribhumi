<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;


class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::get();
        return view('ads.list',compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('ads.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsFormValidation  $request)
    {
        $posts = $request->validated();
        if($request->hasFile('ads_image')) {
            $citFile = fileUpload($request->file('ads_image'));
            $posts['ads_image'] = $citFile;
        }
        Advertisement::create($posts);
        return redirect('/manage-ads')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement, $id)
    {
        $row = Advertisement::find($id);
        return view('ads.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(AdsFormValidation  $request, $id)
    {
        $posts = $request->validated();
        if($request->hasFile('ads_image')) {
            $citFile = fileUpload($request->file('ads_image'));
            $posts['ads_image'] = $citFile;
        }
        Advertisement::where('id', $id)->update($posts);
        return redirect('/manage-ads')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
