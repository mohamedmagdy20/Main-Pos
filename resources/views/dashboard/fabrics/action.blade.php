@if ($type == 'actions')
    <a class="btn btn-primary" href="{{ route('fabrics.edit', $data->id) }}"><i class="fa fa-pen"></i></a>
    <a class="btn btn-danger" onclick="deletef({{$data->id}})"><i class="fa fa-trash"></i></a>
@endif
