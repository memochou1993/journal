<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title',
        'creator',
        'subject',
        'description',
        'publisher',
        'contributor',
        'date',
        'type',
        'format',
        'identifier',
        'source',
        'language',
        'relation',
        'coverage',
        'rights'
    ];
}
