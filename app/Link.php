<?php

namespace App;

use App\Link;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['url_org', 'url_short', 'active'];
}

