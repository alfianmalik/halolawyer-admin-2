<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyersAccountNumber extends Model
{
    use HasFactory;

    /**
     * 
     */
    protected $table = 'lawyers_account_number';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * 
     */
    public function lawyers()
    {
        return $this->belongsTo(Lawyers::class, 'lawyers_id');
    }
}
