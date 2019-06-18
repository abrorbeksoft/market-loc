<?php

namespace App\Http\Controllers;

use App\Kitob;
use Illuminate\Http\Request;

class kitobController extends Controller
{
    public function create(Request $request)
    {
        $file=$request->file('picture');
        $file_new_name=time().$file->getClientOriginalName();
        $file->move('pictures',$file_new_name);

        $kitob=new Kitob();
        $kitob->name=$request->name;
        $kitob->picture=$file_new_name;
        $kitob->price=$request->price;
        $kitob->text=$request->text;
        $kitob->save();
        return redirect()->action('pageController@index');
    }
    public function update(Request $request,$id)
    {
        $file=$request->file('picture');
        $file_new_name=time().$file->getClientOriginalName();
        $file->move('pictures',$file_new_name);
        $kitob=Kitob::find($id);
        $kitob->name=$request->name;
        $kitob->picture=$file_new_name;
        $kitob->price=$request->price;
        $kitob->text=$request->text;
        $kitob->save();

        return redirect()->action('pageController@index');

    }
    public function delete($id)
    {
        $kitob=Kitob::find($id);
        $kitob->delete();
        return redirect()->action('pageController@index');
    }

}
