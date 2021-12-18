<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseCategory extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'case_category';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialization()
    {
        return $this->hasMany(Specialization::class, 'case_category_id');
    }
}
