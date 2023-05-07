<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
  
    protected $table = "tipe_transaksi";

    protected $guarded = [];

    public $timestamps = false;
}
