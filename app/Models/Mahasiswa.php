<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';
    public function ktm(){
        return $this->hasOne(Ktm::class, 'id_mahasiswa');
    }

    // public $timestamps = false;
}