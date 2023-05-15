<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory; 
    protected $table = 'statistic';
    protected $fillable = ['id','country', 'regionName', 'city', 'date'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
