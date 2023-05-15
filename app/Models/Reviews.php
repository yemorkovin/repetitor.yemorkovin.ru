<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = ['id','title', 'name', 'date', 'link'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
