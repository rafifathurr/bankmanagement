<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
  
    protected $table = "data_nasabah";

    protected $guarded = [];

    public $timestamps = false;
}
