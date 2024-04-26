<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nip', 'email', 'nama', 'tanggal_lahir', 'no_hp'];
    public $timestamps = false;
}
