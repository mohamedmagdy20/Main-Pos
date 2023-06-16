<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
class AdminController extends Controller
{
    protected $view = 'dashboard.admins.';

    /**
    * view functions
    */
    public function index()
    {
        return view($this->view.'index');

    }

    public function create()
    {
        return view($this->view.'create');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view($this->view.'edit',['data'=>$data]);
    }

    /**
    *   functions effect with db
    */
    public function store(StoreAdmin $request)
    {
        $data = $request->validated();
        
        $data['password'] = Hash::make($data['password']);
        if(User::create($data))
        {
            return redirect()->back()->with('success','Success');
        }
        else{
            return redirect()->back()->with('error','Error Accure Try Again later');
        }
    }
    public function delete(Request $request)
    {
        $data = User::findOrFail($request->id);
        $data->delete();
    }
    public function update(StoreAdmin $request,$id)
    {
        $data = $request->validated();
        $user  = User::findOrFail($id);
        $user->update($data);
        return redirect()->back()->with('success','Success');

    }

    // datatables
    public function data()
    {
        $data = User::query();
        return DataTables::of($data)->addColumn('actions',function($data){
            return view('dashboard.admins.actions',['type'=>'actions','data'=>$data]);
        })->make(true);
    }

    //
}
