<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public $model ;
    public function __construct(Role $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('dashboard.roles.index'); 
    }

    public function data()
    {
        $data = $this->model->query();
        return DataTables::of($data)
        ->addColumn('actions',function($data){
            return  view('dashboard.roles.action',['type'=>'actions','data'=>$data]);
        })
        ->make(true);

    }

    public function create()
    {
        return view('dashboard.roles.create') ;
    }


    public function store(Request  $request)
    {
        $data = $request->all();
        $this->model->create(array_merge($data,['name'=>trim($request->display_name)]));
        return redirect()->back()->with('success','Success');
    }


    
}
