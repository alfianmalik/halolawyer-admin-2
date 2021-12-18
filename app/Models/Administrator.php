<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Musonza\Chat\Traits\Messageable;

class Administrator extends Authenticatable
{
    use HasFactory, Messageable;

    protected $table = 'admin';
}
