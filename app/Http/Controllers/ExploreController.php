<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function addExplore()
    {
        return view('admin.addexplore');
        # code...
    }
    public function uploadExplore(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->filter_by).time().'.'.$ext;
        $request->image->move(public_path('explore_image'),$imagename);

        $data = new Explore();
        $data->image = $imagename;
        $data->filter_by = $request->filter_by;
        $data->save();

        return back();
        # code...
    }
    public function showAllExplores()
    {
        $explores = Explore::all();
        return view('admin.allexplores',compact('explores'));
        # code...
    }
    public function deleteExplore($id)
    {
        $data = Explore::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    //
}
