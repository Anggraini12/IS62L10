<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens'; // Nama tabel yang benar
    protected $fillable = ['nidn', 'nama', 'jabatan','email','No_Hp'];
}