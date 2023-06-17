@extends('dashboard.layouts.app')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Fiberics</h4>
                <p class="card-description">
                    Add Fiberics
                </p>
                <form class="forms-sample" action="{{ route('fabrics.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="code">Title</label>
                                <input type="text" name="name" class="form-control" id="title" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="code">Price</label>
                                <input type="number" name="price" value="{{old('price',$data->price)}}" class="form-control" id="price" >
                            </div>
                        </div>
                        
                        
                       
                       <div class="col-md-12">
                        <div class="form-group">
                            <label for="size">Notes</label>
                            <textarea name="notes" class="form-control" id="" cols="30" rows="10"></textarea>
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
