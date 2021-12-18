<?php

namespace App\Models;

use App\Lawyers;
use Illuminate\Database\Eloquent\Model;

class LawyerWorkArea extends Model
{
    //

    /**
     * @var string
     */
    protected $table = 'lawyers_work_area';

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
    public function provinces()
    {
        return $this->belongsTo(Province::class, 'province');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cities()
    {
        return $this->belongsTo(Cities::class, 'city');
    }
}
