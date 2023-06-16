<?php

namespace App\Http\Controllers;

use App\Http\Requests\Line\LineRequest;
use Illuminate\Http\Request;
use App\Models\Line;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class LineController extends Controller
{
    //
    public $model ;
    public function __construct(Line $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('dashboard.lines.index'); 
    }

    public function data()
    {
        $data = $this->model->query();
        return FacadesDataTables::of($data)
        ->addColumn('actions',function($data){
            return  view('dashboard.lines.action',['type'=>'actions','data'=>$data]);
        })
        ->make(true);

    }

    public function create()
    {
        return view('dashboard.lines.create') ;
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view('dashboard.lines.edit',['data'=>$data]);
    }

    public function store(LineRequest $request)
    {
        $data = $request->validated();
        $this->model->create(array_merge($data));
        return redirect()->back()->with('success','Success');
    }


    public function update(LineRequest $request, $id)
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
