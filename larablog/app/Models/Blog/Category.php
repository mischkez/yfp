<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * A mass assignment vulnerability occurs when a user passes an unexpected HTTP request field
     * and that field changes a column in your database that you did not expect.
     * For example, a malicious user might send an is_admin parameter through an HTTP request,
     * which is then passed to your model's create method, allowing the user to escalate themselves to an administrator.
     */

    protected $fillable = ['slug', 'name']; // here we accept only these two fields

    /**
     * While migrations set up the relationships in the database,
     * Eloquent model relationships define how these relationships are used and interacted with in your Laravel application.
     * Model relationships allow you to easily perform operations and queries involving related models.
     * For example: $category->posts()->get() will return all posts that belong to a category.
     * This will form a query that looks like this: select * from posts where category_id = 1.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
