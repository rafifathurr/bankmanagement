<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data['title'] = "Data Jenis Transaksi";
        $data['type'] = Type::where('deleted_at', null)->get();
        $data['urldelete'] = "type/destroy";
        return view('type.index', $data);
    }

    public function create(){
        $data['title'] = "Tambah Jenis Transaksi";
        $data['url'] = "store";
        return view('type.create', $data);
    }

    public function store(Request $req){
        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        Type::create([  
            'type_transaction' => $req->type,
            'created_at' => $datenow
        ]);

        return redirect()->route('type.index')->with(["success" => "Data Berhasil Disimpan!"]);
    }

    public function destroy(Request $req){

        date_default_timezone_set("Asia/Bangkok");
        $datenow = date('Y-m-d H:i:s');
        $exec = Type::where('id', $req->id)->update([  
                'deleted_at' => $datenow
            ]);

        if ($exec) {
            Session::flash('success', 'Data Berhasil Dihapus!');
        } else {
            Session::flash('gagal', 'Error Data');
        }

    }
}
