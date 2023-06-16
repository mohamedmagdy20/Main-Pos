<?php

namespace App\Http\Controllers;

use App\Models\Gum;
use App\Http\Requests\Gum\GumRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class GumController extends Controller
{
    //
    public $model ;
    public function __construct(Gum $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('dashboard.gums.index'); 
    }

    public function data()
    {
        $data = $this->model->query();
        return DataTables::of($data)
        ->addColumn('actions',function($data){
            return  view('dashboard.gums.action',['type'=>'actions','data'=>$data]);
        })
        ->make(true);

    }

    public function create()
    {
        return view('dashboard.gums.create') ;
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('dashboard.gums.edit',['data'=>$data]);
    }

    public function store(GumRequest $request)
    {
        $data = $request->validated();
        $this->model->create(array_merge($data));
        return redirect()->back()->with('success','Success');
    }


    public function update(GumRequest $request, $id)
    {
        $data = $request->validated();
        $gum = $this->model->findOrFail($id);
        $gum->update($data);

        return redirect()->back()->with('success','Success');
    }

    public function delete(Request $request)
    {
        $this->model->findOrFail($request->id)->delete();
        return response()->json([
            'success'=>true,
            'msg'=>"Deleted"
        ]);
    }
}
