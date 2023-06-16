@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Lines</h4>
                <p class="card-description">
                    Edit Lines
                </p>
                <form class="forms-sample" action="{{ route('line.update',$data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="code">Title</label>
                                <input type="text" name="title" value="{{old('title',$data->title)}}" class="form-control" id="title" >
                            </div>
                        </div>
                        
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Notes</label>
                            <textarea name="note" class="form-control" id="" cols="30" rows="10">{{old('note',$data->note)}}</textarea>
                        </div>
                       </div>
        

                    </div>
           
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('line.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
@stop
