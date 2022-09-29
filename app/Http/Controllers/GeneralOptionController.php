<?php

namespace App\Http\Controllers;
use Response;
use Validator;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SocialMediaValidation;
use App\Models\GeneralOption;


class GeneralOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Category::where('is_menu', 1)->orderBy('menu_position','asc')->get();
        $data = GeneralOption::get();
        return view('generaloption.index', compact('menus'));
    }
    public function rearrange(Request $request) {
        $data = $request->all();
        $message = "Menu Order Rearranged successfully";
        foreach($data as $key => $position) {
            foreach($position as $index => $p){
                $exp = explode('_', $p);
                $id = $exp[1];
                Category::find($id)->update(['menu_position' => $index+1]);
               
            }
        }
        return response()->json(['message' => 'Menu Position Rearranged Succesfully'], 200);
    }
    //save general option
    public function saveGeneralOption(Request $request) {
        $validator = Validator::make($request->all(), [
            'company_name'          => 'required',
            'address'               => 'required',
            'phone_no'              => 'required',
            'ads_phone_no'          => 'required',
            'company_email'         => 'required',
            'registration_no'       => 'required',
            'president'             => 'required',
            'editor'                => 'required',
        ]);
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);
        }
        else
        {
            $data = [
                'company_name'          => $request->company_name,
                'address'               => $request->address,
                'phone_no'              => $request->phone_no,
                'ads_phone_no'          => $request->ads_phone_no,
                'company_email'         => $request->company_email,
                'registration_no'       => $request->registration_no,
                'president'             => $request->president,
                'editor'                => $request->editor,
            ];
            $generalOption = GeneralOption::where('id', 1)->first();
            if($generalOption != null) {
                GeneralOption::where('id', 1)->update($data);
                return response()->json('success',200);
            } else {
                GeneralOption::create($data);
                return response()->json('success',200);
            }
        }
    }

    //save general option
    public function saveSocialMediaOption(SocialMediaValidation $request) {
        $posts = $request->validated();
        GeneralOption::updateOrCreate('id',1, $posts);
        return response()->json('success',200);
    }
}
