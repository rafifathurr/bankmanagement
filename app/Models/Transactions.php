<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
  
    protected $table = "data_transaksi";

    protected $guarded = [];

    public $timestamps = false;

    public function desc(){
        return $this->belongsTo('App\Models\Type', 'description', 'id');
    }

    public function member(){
        return $this->belongsTo('App\Models\Customer', 'accountId', 'accountId');
    }

    public function status_name(){
        return $this->belongsTo('App\Models\Status', 'status', 'id');
    }
}
