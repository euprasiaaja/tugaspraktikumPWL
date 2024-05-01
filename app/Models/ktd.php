<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktd extends Model
{
    use HasFactory;
    protected $table = 'ktd';
    protected $primaryKey = 'id_ktd';
    protected $fillable = ['id_dosen', 'nidn'];
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}