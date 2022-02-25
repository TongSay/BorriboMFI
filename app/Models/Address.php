<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['id_apply_job', 'id_apply_loan', 'id_province', 'province', 'id_district', 'district', 'id_commune', 'commune',];
}
