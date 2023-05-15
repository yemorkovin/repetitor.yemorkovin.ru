<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table = 'calendar';

    protected $fillable = ['id','start', 'title'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
