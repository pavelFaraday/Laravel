<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillable - You can use **fillable** to protect which fields you want this to actually allow for updating.
    protected $fillable = [
        'title',
        'description',
        'status',
        'views'
    ];

    // guarded - You can also block all fields from being mass-assignable by doing this:
    protected $guarded = [];

}
