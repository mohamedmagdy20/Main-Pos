<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gum extends Model
{
    use HasFactory;
    
    protected $table = 'gums';
    protected $fillable = [
        'code',
        'small',
        'medium',
        'large',
        'x-large',
        'xx-large'
    ];




}
