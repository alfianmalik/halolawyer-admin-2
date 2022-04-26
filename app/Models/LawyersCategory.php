<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Lawyers;

class LawyersCategory extends Model
{
    protected $table = 'lawyers_category';

    protected $guarded = [];
    /**
     * Get the post that owns the comment.
     */
    public function lawyers()
    {
        return $this->belongsTo(Lawyers::class, 'lawyers_id');
    }

    /**
     * Get the post that owns the comment.
     */
    public function lawyers_specialization()
    {
        return $this->hasMany(LawyerSpecialization::class, 'lawyers_category_id');
    }
}
