<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    // quelli che devi escludere
    // protected $guarded=[];
    // quelli che devi includere
    protected $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'series', 'type'];

    protected $attributes = [
        'series' => 'Default Series Value',
    ];
}
