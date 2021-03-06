<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyersLawFirm extends Model
{
    use HasFactory;

    protected $guarded = ['created_at'];

    protected $table = 'lawyers_law_firm';

    /**
     * 
     */
    public function lawyers_law_firm_files()
    {
        return $this->hasMany(LawyersLawFirmFiles::class, 'lawyers_law_firm_id');
    }
    
}
