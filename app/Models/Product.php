<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // データーベースにアクセス
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'brand',
        'condition',
        'kaitori_price',
        'price',
        'comment'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
