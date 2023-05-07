<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
  
    protected $table = "data_poin_transaksi";

    protected $guarded = [];

    public $timestamps = false;

    public function member(){
        return $this->belongsTo('App\Models\Customer', 'accountId', 'accountId');
    }
}
