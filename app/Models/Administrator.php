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

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'uuid',
        'bod',
        'gender',
        'slug',
        'provider',
        'provider_id',
    ];

    /**
     * 
     */
    public function getParticipantDetails()
    {
        return [
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            'messageable_id' => $this->id,
            'messageable_type' => get_class($this),
        ];
    }
}
