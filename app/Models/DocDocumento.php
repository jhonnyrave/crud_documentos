<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocDocumento extends Model
{
    use HasFactory;
    protected $primaryKey = 'doc_id';
    protected $fillable = ['doc_nombre', 'doc_codigo','doc_id_tipo', 'doc_id_proceso','doc_id','doc_contenido'];
}