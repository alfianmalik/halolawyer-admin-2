<?php

namespace App\Models;

use App\Lawyers;
use Illuminate\Database\Eloquent\Model;

class LawyerSpecialization extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'lawyers_specialization';

    /**
     * @var array
     */
    protected $guarded = [];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function specialization()
    {
        return $this->belongsTo(Specialization::class, 'specialization_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lawyer_category()
    {
        return $this->belongsTo(LawyersCategory::class, 'lawyers_category_id');
    }
}
