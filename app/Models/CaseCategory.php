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

    const APP_URL_ICON = 'icon';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'category_specialization', 'case_category_id', 'specialization_id');
    }
}
