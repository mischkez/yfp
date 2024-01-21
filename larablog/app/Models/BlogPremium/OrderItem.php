<?php

namespace App\Models\BlogPremium;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $connection = 'blog_premium';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
