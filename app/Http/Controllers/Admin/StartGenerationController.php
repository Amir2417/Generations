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
        if($request->file('photo')){
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
            return Redirect('view_first_generation');
        }else{
            $data = new FirstGeneration();
            $data -> name =$request->name;
            $data -> date_of_birth =$request->date_of_birth;
            $data -> birth_place =$request->birth_place;
            $data -> date_of_death =$request->date_of_death;
            $data -> death_place =$request->death_place;
            $data -> laws_house =$request->laws_house;
            $data -> wife =$request->wife;
            $data -> child =$request->child;
            $data->save();
            return Redirect('view_first_generation');
        }
    }
    public function view_first_generation(){
        $data = FirstGeneration::orderBy('id','ASC')->get();
        return view('backend.start_generation.index',compact('data'));
    }
    public function edit($id){
        $data = FirstGeneration::findOrFail($id);
        return view('backend.start_generation.edit',compact('data'));
    }
    public function update(Request $request,$id){
        if($request->file('photo')){
            $image = $request->file('photo');
            $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(900,900)->save('upload/first_generation/'.$image_name);
            $save_url = 'upload/first_generation/'.$image_name;

            FirstGeneration::findOrFail($id)->update([
                'name'=>$request->name,
                'date_of_birth'=>$request->date_of_birth,
                'birth_place'=>$request->birth_place,
                'date_of_death'=>$request->date_of_death,
                'death_place'=>$request->death_place,
                'laws_house'=>$request->laws_house,
                'wife'=>$request->wife,
                'child'=>$request->child,
                'photo'=>$save_url,
            ]);
            return Redirect('view_first_generation');
        }else{
            FirstGeneration::findOrFail($id)->update([
                'name'=>$request->name,
                'date_of_birth'=>$request->date_of_birth,
                'birth_place'=>$request->birth_place,
                'date_of_death'=>$request->date_of_death,
                'death_place'=>$request->death_place,
                'laws_house'=>$request->laws_house,
                'wife'=>$request->wife,
                'child'=>$request->child,
            ]);
            return Redirect('view_first_generation');
        }
    }
    public function delete($id){
        FirstGeneration::findOrFail($id)->delete();
        return Redirect('view_first_generation');
    }
}
