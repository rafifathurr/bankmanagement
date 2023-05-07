<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <style>
        .table-bordered th{
            vertical-align: middle !important;
        }
    </style>
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
                                        <a href="{{route('transactions.create')}}" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                            Tambah Transaksi
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Nama Nasabah</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Description</th>
                                                <th width="7%">Debit Credit</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transaction as $transacts)
                                            <tr>
                                                <td>{{$transacts->id}}</td>
                                                <td>{{$transacts->member->name}}</td>
                                                <td>{{$transacts->transaction_date}}</td>
                                                <td>{{$transacts->desc->type_transaction}}</td>
                                                <td>{{$transacts->status_name->status_code}}</td>
                                                <td style="text-align:right;">{{number_format($transacts->amount,0,',','.')}}</td>
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
                    order: [[2, 'asc']],
                });
            });
        </script>
    </body>
</html>