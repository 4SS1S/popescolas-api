<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    protected $table = 'upvote';

    protected $primaryKey = 'id_upvote';

    protected $fillable = [
        'up_user',
        'up_post'
    ];

    protected $timestamps = false;
}
