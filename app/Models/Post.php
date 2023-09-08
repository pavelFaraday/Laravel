<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

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
