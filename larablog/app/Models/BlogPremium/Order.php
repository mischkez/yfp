<?php

namespace App\Models\BlogPremium;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Blog\User;

class Order extends Model
{
    use HasFactory;

    protected $connection = 'blog_premium';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
