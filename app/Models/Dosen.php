<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'nip';
    public $timestamps = false;

    protected $fillable = ['nama', 'nip', 'email'];
    public function ktd()
    {
        return $this->hasOne(Ktd::class, 'ID_dosen');
    }
}