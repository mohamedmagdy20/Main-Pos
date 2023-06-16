<?php

namespace App\Http\Controllers;

use App\Models\Fabrics;
use App\Http\Requests\fibersRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FabricsController extends Controller
{
    //
    public $model ;
    public function __construct(Fabrics $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('dashboard.fabrics.index'); 
    }

    public function data()
    {
        $data = $this->model->query();
        return DataTables::of($data)
        ->addColumn('actions',function($data){
            return  view('dashboard.fabrics.action',['type'=>'actions','data'=>$data]);
        })
        ->make(true);

    }

    public function create()
    {
        return view('dashboard.fabrics.create') ;
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('dashboard.fabrics.edit',['data'=>$data]);
    }

    public function store(fibersRequest $request)
    {
        $data = $request->validated();
        $this->model->create($data);
        return redirect()->back()->with('success','Success');
    }


    public function update(fibersRequest $request, $id)
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
