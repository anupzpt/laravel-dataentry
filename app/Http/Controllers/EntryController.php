<?php

namespace App\Http\Controllers;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function entry()
    {
        return view('entry',['list'=>Entry::all()]);
    }
  public function saveData(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'address'=>'required',
            'contact'=>'required',
        ]);
        Entry::create([
            'name'=> $request->name,
            'address'=>$request->address,
            'contact'=>$request->contact,
        ]);

        return redirect('entry');
    }
    public function delete($id)
    {
        $data= Entry::find($id);
        $data->delete();
        return redirect('entry');
    }
    public function edit($id)
    {
        $data= Entry::find($id);
        return view('edit',['data'=>$data]);

    }
    public function updateData(Request $request)
    {
        $newObj=Entry::find($request->id);
        $newObj->name=$request->name;
        $newObj->address=$request->address;
        $newObj->contact=$request->contact;
        $newObj->save();
        return redirect('entry');
    }
}
