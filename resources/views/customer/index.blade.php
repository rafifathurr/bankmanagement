<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body id="page-top">
        <div id="wrapper">
            @include('layouts.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('layouts.navbar')
                    <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">{{$title}}</h1>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{route('customer.create')}}" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                            Tambah Nasabah
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Account ID</th>
                                                <th>Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customer as $cust)
                                            <tr>
                                                <td>{{$cust->accountId}}</td>
                                                <td>{{$cust->name}}</td>
                                                <td>
                                                    <a href="{{route('customer.edit', $cust->accountId)}}" data-toggle="tooltip" title="Edit"
                                                        class="btn btn-link btn-simple-primary btn-lg"
                                                        data-original-title="Edit" control-id="ControlID-16">
                                                        <i class="fa fa-edit" style="color:grey;"></i>
                                                    </a>
                                                    <button type="submit" onclick="destroy({{$cust->accountId}}, '{{url($urldelete)}}')" data-toggle="tooltip" title="Delete"
                                                        class="btn btn-link btn-simple-danger"
                                                        data-original-title="Delete" control-id="ControlID-17">
                                                        <i class="fa fa-trash" style="color:red;"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.scripts')
        @include('layouts.swal')
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    order: [[1, 'asc']],
                });
            });
        </script>
    </body>
</html>