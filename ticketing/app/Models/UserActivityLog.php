<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivityLog extends Model
{
    protected $primaryKey = 'logID';
    public $timestamps = false;
    protected $fillable = ['userID', 'action', 'ipAddress', 'userAgent', 'createdAt'];
}

