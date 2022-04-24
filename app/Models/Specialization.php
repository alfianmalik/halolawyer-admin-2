<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialization extends Model
{
    use SoftDeletes;
    
    //
    /**
     * @var string
     */
    protected $table = 'specialization';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function case_category()
    {
        return $this->belongsToMany(CaseCategory::class, 'category_specialization', 'specialization_id', 'case_category_id');
    }
}
