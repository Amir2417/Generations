<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FirstGeneration;
use Image;
use Carbon\Carbon;

class StartGenerationController extends Controller
{
    public function create(){
        return view('backend.start_generation.create');
    }
    public function store(Request $request){

        $image = $request->file('photo');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(900,900)->save('upload/first_generation/'.$image_name);
        $save_url = 'upload/first_generation/'.$image_name;

        $data = new FirstGeneration();
        $data -> name =$request->name;
        $data -> date_of_birth =$request->date_of_birth;
        $data -> birth_place =$request->birth_place;
        $data -> date_of_death =$request->date_of_death;
        $data -> death_place =$request->death_place;
        $data -> laws_house =$request->laws_house;
        $data -> wife =$request->wife;
        $data -> child =$request->child;
        $data -> photo =$save_url;
        $data->save();
    }
    public function view_first_generation(){
        $data = FirstGeneration::orderBy('name','ASC')->get();
        return view('backend.start_generation.index',compact('data'));
    }
    
}
