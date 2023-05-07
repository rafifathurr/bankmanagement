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
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nasabah</th>
                                                <th>Total Point</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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

                var token = '{{csrf_token()}}';

                $('#dataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    destroy: true,
                    "ajax": {
                        "url": "{{ route('points.scopeData') }}",
                        "type": "POST",
                        "data": {
                            '_token': token
                        }
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'nasabah',
                            name: 'nasabah'
                        },
                        {
                            data: 'total',
                            name: 'total'
                        }
                    ],
                    order: [[2, 'desc']],
                });
            });
        </script>
    </body>
</html>