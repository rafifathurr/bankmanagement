<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
  
    protected $table = "master_status";

    protected $guarded = [];

    public $timestamps = false;
}
