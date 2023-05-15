<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'slider';
    protected $fillable = ['id','description', 'text_free', 'img', 'button', 'text_button'];
    protected  $guarded = ['id'];
    public $timestamps = false;
}
