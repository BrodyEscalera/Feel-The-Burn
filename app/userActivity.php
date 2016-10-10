<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class userActivity
 * @package App
 */
class userActivity extends Model
{
    //
    /**
     * @var array
     */
    protected $fillable = [
        'activity',
        'distance',
        'time',
        'activityName'
    ];

    
}
