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
                                    <div class="col-md-4">
                                        <select class="form-control selectpicker" id="accountid"
                                            name="accountid" required>
                                            <option value="" selected disabled hidden>- Pilih Nasabah -</option>
                                            @foreach($customer as $cust)
                                                <option value="{{$cust->accountId}}">{{$cust->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button id="filter_member" class="btn btn-success">
                                            <i class="fa fa-search"></i>
                                            Cari
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div id="collapse" class="panel-collapse collapse">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="15%">Tanggal Transaksi</th>
                                                    <th>Description</th>
                                                    <th>Credit</th>
                                                    <th>Debit</th>
                                                    <th width="25%">Amount</th>
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
        </div>
        @include('layouts.scripts')
        @include('layouts.swal')
        <script>
            $(document).ready(function() {
                $('#filter_member').click(function(){
                    let accountid = $('#accountid').val();
                    if(accountid != null){
                        
                        $("#collapse").collapse('show');
                        
                        var token = '{{csrf_token()}}';

                        $('#dataTable').DataTable({
                            processing: true,
                            serverSide: true,
                            destroy: true,
                            "ajax": {
                                "url": "{{ route('transactions.report.scopeData') }}",
                                "type": "POST",
                                "data": {
                                    '_token': token,
                                    'account_id': accountid
                                }
                            },
                            columns: [{
                                    data: 'transaction_date',
                                    name: 'transaction_date'
                                },
                                {
                                    data: 'desc.type_transaction',
                                    name: 'desc.type_transaction'
                                },
                                {
                                    data: 'credit',
                                    name: 'credit'
                                },
                                {
                                    data: 'debit',
                                    name: 'debit'
                                },
                                {
                                    data: 'amount',
                                    name: 'amount'
                                }
                            ],
                            order: [[0, 'asc']],
                        });
                    }else{
                        alert('Harap Pilih Nasabah!');
                    }
                })
            });
        </script>
    </body>
</html>