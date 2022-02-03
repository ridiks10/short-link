<?php

namespace App\ShortLink\Entity;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{

    protected $fillable = [
        'original_link',
        'short',
    ];

    public function getRouteKeyName(): string
    {
        return 'short';
    }
}
