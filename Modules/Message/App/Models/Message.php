<?php

namespace Modules\Message\App\Models;

use Modules\Message\Database\factories\MessageFactory;
use Modules\Ship\Parents\Models\ParentModel;

class Message extends ParentModel
{
    protected $connection = 'Second_mysql';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    protected static function newFactory(): MessageFactory
    {
        //return MessageFactory::new();
    }
}
