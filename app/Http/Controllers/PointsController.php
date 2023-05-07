<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Points;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PointsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data['title'] = "Akumulasi Point Nasabah";
        $data['points'] = Points::select(DB::raw('data_nasabah.name as nasabah, sum(point) as total'))
                                ->join('data_nasabah','data_nasabah.accountId','=','data_poin_transaksi.accountId')
                                ->groupBy('data_poin_transaksi.accountId')->get();
        return view('points.index', $data);
    }
    
    public function scopeData(){
        $points = Points::select(DB::raw('data_nasabah.name as nasabah, sum(point) as total'))
                    ->join('data_nasabah','data_nasabah.accountId','=','data_poin_transaksi.accountId')
                    ->groupBy('data_poin_transaksi.accountId')->get();

        return Datatables::of($points)
        ->addIndexColumn()
        ->make(true);
    }
}
