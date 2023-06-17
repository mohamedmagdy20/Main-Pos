@extends('dashboard.layouts.app')
@section('content')


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="content m-2 text-center">
                    <a class="btn btn-primary" href="{{ route('admin.create') }}">Add Admins <i
                            class="fa fa-plus"></i></a>
                </div>

                <h4 class="card-title">Admins</h4>
                <p class="card-description">
                    Show Admins
                </p>

                <div class="table-responsive">
                    <table class="table table-striped" id="User-Table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        let UsersTable = null

        function setUserDatatable() {
            var url = "{{ route('admin.data') }}";

            UsersTable = $("#User-Table").DataTable({
                processing: true,
                serverSide: true,
                dom: 'Blfrtip',
                lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],
                pageLength: 9,
                sorting: [0, "DESC"],
                ordering: false,
                ajax: url,

                language: {
                    paginate: {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>"
                    },
                },


                columns: [
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },

                    
                    {
                        data: 'role'
                    },

                    {
                        data: 'actions'
                    }
                ],
            });
        }

        setUserDatatable();

        function deleteAdmin(id)
        {
          swal({
                  title: "Delete",
                  text: "Are You Sure You Want TO Delete",
                  icon: 'warning',
                  buttons: true,
                  dangerMode: true,
              }).then(willDelete => {
                  if (willDelete) {
                      $.ajax({
                          method: 'GET',
                          url: "{{route('admin.delete')}}",
                          dataType: 'json',
                          data: {id},
                          success: function(result) {
                                  toastr.success('Success');
                                  UsersTable.ajax.reload();
                            },
                          error:function(error)
                          {
                              console.log(error);
                          }
                      });
                  }
              });   
        }
    </script>


@stop
