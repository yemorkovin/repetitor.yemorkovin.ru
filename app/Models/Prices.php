<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    use HasFactory;
        protected $table = 'prices';

    protected $fillable = ['id','title', 'price'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
