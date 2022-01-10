<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerCaseExperiences extends Model
{
    use HasFactory;

    protected $table = 'lawyers_case_experience';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lawyers()
    {
        return $this->belongsTo(Lawyers::class, 'lawyers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function case_category()
    {
        return $this->belongsTo(CaseCategory::class, 'case_category_id');
    }
}
