<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class News extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function newsuser ()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }
}
