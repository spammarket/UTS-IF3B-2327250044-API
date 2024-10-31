<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKamarHotel extends Model
{
    use HasFactory;
    protected $table = "data_kamar_hotel";
    protected $fillable = ["ruangan", "lantai", "grade", "status"];
}
