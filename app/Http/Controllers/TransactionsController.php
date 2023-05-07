<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Customer;
use App\Models\Points;
use App\Models\Status;
use App\Models\Type;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data['title'] = "Daftar Transaksi";
        $data['transaction'] = Transactions::with('member', 'status_name', 'desc')->orderBy('transaction_date', 'asc')->get();
        return view('transaction.index', $data);
    }

    public function create(){
        $data['title'] = "Tambah Daftar Transaksi";
        $data['url'] = "store";
        $data['customer'] = Customer::where('deleted_at', null)->orderBy('name', 'asc')->get();
        $data['type'] = Type::where('deleted_at',null)->orderBy('id', 'asc')->get();
        $data['status'] = Status::orderBy('id', 'asc')->get();

        $id_check = mt_rand();
        $check = Transactions::where('id', $id_check)->first();

        // CHECK NUMBER EXIST
        if($check){
            $data['transactions_id'] = mt_rand();
        }else{
            $data['transactions_id'] = $id_check;
        }

        return view('transaction.create', $data);
    }

    public function store(Request $req){
        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        $point = 0;

        if($req->desc == 3){
            $calculation = (int)$req->amount - 10000;
            if($calculation == 0){
                $point = 0;
            }else{
                $calculation = $calculation - 30000;
                if($calculation >= 0){
                    if($calculation == 0){
                        $point = 10000/1000*1;
                        $calculation = $calculation + 30000 - 10000;
                        $point = ($calculation/1000*2)+$point+0;
                    }else{
                        $point = 30000/1000*1;
                        $point = ($calculation/1000*2)+$point+0;
                    }
                }else{
                    $calculation = $calculation + 30000 - 10000;
                    $point = 10000/1000*1;
                    $point = ($calculation/1000*2)+$point;
                }
            }
        }

        if($req->desc == 4){
            $calculation = (int)$req->amount - 50000;
            if($calculation == 0){
                $point = 0;
            }else{
                $calculation = $calculation - 100000;
                if($calculation >= 0){
                    if($calculation == 0){
                        $point = 50000/2000*1;
                        $calculation = $calculation + 100000 - 50000;
                        $point = ($calculation/2000*2)+$point+0;
                    }else{
                        $point = 100000/2000*1;
                        $point = ($calculation/2000*2)+$point+0;
                    }
                }else{
                    $calculation = $calculation + 100000 - 50000;
                    $point = 50000/2000*1;
                    $point = (($calculation/2000)*2)+$point;
                }
            }
        }

        $exec = Transactions::create([  
            'id' => $req->transactions_id,
            'transaction_date' => $req->trans_date,
            'accountId' => $req->accountid,
            'description' => $req->desc,
            'status' => $req->status,
            'amount' => $req->amount,
            'created_at' => $datenow
        ]);

        if($exec){
            Points::create([  
                'accountId' => $req->accountid,
                'point' => $point,
                'created_at' => $datenow
            ]);
        }

        return redirect()->route('transactions.index')->with(["success" => "Data Berhasil Disimpan!"]);
    }

    public function report(){
        $data['title'] = "Daftar Report";
        $data['customer'] = Customer::where('deleted_at', null)->orderBy('name', 'asc')->get();
        return view('report.index', $data);
    }

    public function scopeReport(Request $req){

        $transaction = Transactions::with('member', 'status_name', 'desc')->where('accountId', $req->account_id)->orderBy('transaction_date', 'asc')->get();

        return Datatables::of($transaction)
        ->addIndexColumn()
        ->addColumn('credit', function ($data) {
            if($data->status == 1){
                return '<div style="text-align:right;">'.number_format($data->amount,0,',','.').'</div>';
            }else{
                return '<div style="text-align:right;">-</div>';
            }
        })
        ->addColumn('debit', function ($data) {
            if($data->status == 2){
                return '<div style="text-align:right;">'.number_format($data->amount,0,',','.').'</div>';
            }else{
                return '<div style="text-align:right;">-</div>';
            }
        })
        ->addColumn('amount', function ($data) {
            return '<div style="text-align:right;">'.number_format($data->amount,0,',','.').'</div>';
        })
        ->rawColumns([ 'credit', 'debit', 'amount'])
        ->make(true);
    }
}
