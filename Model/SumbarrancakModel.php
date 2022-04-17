<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SumbarrancakModel extends Model
{
    use HasFactory;

    protected $table = 'modelweb';
    protected $primaryKey = 'id_model';
    protected $fillable = ['nama_model', 'tempatlahir', 'tanggallahir', 'alamat', 'no_hp'];
}
