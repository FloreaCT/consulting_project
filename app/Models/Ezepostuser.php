<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class EzepostUser extends Model
{
    protected $table = 'ezepost_user';

    protected $fillable = [
        'username',
        'ezepost_addr',
        'password',
        'displayname',
        'controlstring',
        'balance',
        'ezepost_counter',
        'status',
        'free_send_left',
    ];

    // Timestamps
    public $timestamps = true;

    // Other model configurations...

    // Relationships, if any...

}
