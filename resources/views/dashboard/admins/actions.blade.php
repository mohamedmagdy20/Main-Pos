@if ($type == 'actions')
    <a class="btn btn-primary" href="{{ route('admin.edit', $data->id) }}"><i class="fa fa-pen"></i></a>
    <a class="btn btn-danger" onclick="deleteAdmin({{$data->id}})"><i class="fa fa-trash"></i></a>
@elseif ($type =='role')
@foreach ($data->roles as $role )
<p>{{$role->display_name}}</p> 
@endforeach
@endif
