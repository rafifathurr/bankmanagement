<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data['title'] = "Data Nasabah";
        $data['customer'] = Customer::where('deleted_at', null)->orderBy('name', 'ASC')->get();
        $data['urldelete'] = "customer/destroy";
        return view('customer.index', $data);
    }

    public function create(){
        $data['title'] = "Tambah Data Nasabah";
        $data['url'] = "store";
        $id_check = mt_rand();
        $check = Customer::where('accountId', $id_check)->first();

        // CHECK NUMBER EXIST
        if($check){
            $data['accountid'] = mt_rand();
        }else{
            $data['accountid'] = $id_check;
        }

        return view('customer.create', $data);
    }

    public function store(Request $req){
        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        Customer::create([  
            'accountId' => $req->accountid,
            'name' => $req->name,
            'created_at' => $datenow
        ]);

        return redirect()->route('customer.index')->with(["success" => "Data Berhasil Disimpan!"]);
    }

    public function edit($id){
        $data['title'] = "Edit Data Nasabah";
        $data['url'] = "update";
        $data['customer'] = Customer::where('accountId', $id)->first();
        return view('customer.create', $data);
    }

    public function update(Request $req){
        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        Customer::where('accountId', $req->accountid)->update([  
            'name' => $req->name,
            'updated_at' => $datenow
        ]);

        return redirect()->route('customer.index')->with(["success" => "Data Berhasil Diubah!"]);
    }

    public function destroy(Request $req){

        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        $exec = Customer::where('accountId', $req->id)->update([  
                'deleted_at' => $datenow
            ]);

        if ($exec) {
            Session::flash('success', 'Data Berhasil Dihapus!');
        } else {
            Session::flash('gagal', 'Error Data');
        }

    }
}
