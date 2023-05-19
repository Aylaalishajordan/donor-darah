<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Response;

class darah extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'age',
        'bb',
        'no_telp',
        'golongan',
        'tanggal',
        'foto',
     ];
     public function response()
    {
        return $this->hasOne(Response::class);
    }
}
