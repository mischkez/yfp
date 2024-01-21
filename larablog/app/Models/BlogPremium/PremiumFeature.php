<?php

namespace App\Models\BlogPremium;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumFeature extends Model
{
    use HasFactory;

    protected $connection = 'blog_premium';

    protected $table = 'features';
}
