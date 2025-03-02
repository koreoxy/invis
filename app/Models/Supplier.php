<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public $fillable = [
        'supplier_name',
        'supplier_phone',
        'supplier_address'
    ];
}
