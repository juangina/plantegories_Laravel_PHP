<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'price',
        'category',
        'location',
        'quantity',
        'filename',
        'url',
        'user_id',
    ];
}