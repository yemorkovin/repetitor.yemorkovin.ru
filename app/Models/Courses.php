<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
     protected $fillable = ['id','img', 'title', 'description', 'full_text'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
