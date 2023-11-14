<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProProceso extends Model
{
    use HasFactory;
    public $table = "pro_procesos";
    protected $fillable = array("*");
}