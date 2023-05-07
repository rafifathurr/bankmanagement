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
                                <div class="box box-primary">
                                    <div class="box-body">
                                        <form id="form_add" action="{{route('transactions.'.$url)}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="transactions_id" id="transactions_id" value="{{$transactions_id}}" class="form-control" autocomplete="off" required>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <label class="col-md-3">Nasabah <span style="color: red;">*</span></label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" id="accountid"
                                                            name="accountid" required>
                                                            <option value="" selected disabled hidden>- Pilih Nasabah -</option>
                                                            @foreach($customer as $cust)
                                                                <option value="{{$cust->accountId}}">{{$cust->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <label class="col-md-3">Tanggal Transaksi <span style="color: red;">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="date" name="trans_date" id="trans_date" class="form-control" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <label class="col-md-3">Jenis Transaksi <span style="color: red;">*</span></label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" id="desc" onchange="jenis(this.value)"
                                                            name="desc" required>
                                                            <option value="" selected disabled hidden>- Pilih Transaksi -</option>
                                                            @foreach($type as $ty)
                                                                <option value="{{$ty->id}}">{{$ty->type_transaction}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <label class="col-md-3">Debit / Credit <span style="color: red;">*</span></label>
                                                    <div class="col-md-10">
                                                        <select class="form-control" id="status" style="pointer-events:none;"
                                                            name="status" required readonly>
                                                            <option value="" selected disabled hidden></option>
                                                            @foreach($status as $stat)
                                                                <option value="{{$stat->id}}">{{$stat->status_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-11">
                                                    <label class="col-md-3">Amount (Rp.) <span style="color: red;">*</span></label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="amount" id="amount" class="form-control numeric" autocomplete="off" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="modal-footer">
                                                <div style="float:right;">
                                                    <div class="col-md-12" style="margin-right: 20px;">
                                                        <a href="{{ route('customer.index')}}" type="button" class="btn btn-danger">
                                                            <i class="fa fa-arrow-left"></i>&nbsp; 
                                                            Back
                                                        </a>
                                                        <button type="submit" class="btn btn-primary" style="margin-left:10px;">
                                                            <i class="fa fa-check"></i>&nbsp;
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.scripts')
        <script>
            function jenis(val){
                document.getElementById('status').value = '';
                if(val != 1 && val != 2){
                    document.getElementById('status').value=2;
                }else{
                    document.getElementById('status').value=1;
                }
            }
        </script>
    </body>
</html>