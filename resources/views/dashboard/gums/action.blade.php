@if ($type == 'actions')
    <a class="btn btn-primary" href="{{ route('gum.edit', $data->id) }}"><i class="fa fa-pen"></i></a>
    <a class="btn btn-danger" onclick="deleteGUM({{$data->id}})"><i class="fa fa-trash"></i></a>
@endif
