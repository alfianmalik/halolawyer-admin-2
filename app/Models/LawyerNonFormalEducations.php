<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LawyerNonFormalEducations extends Model
{
    //

    const NONFORMALEDUCATIOSN_FOLDER = "nonformal_educations";

    /**
     * @var string
     */
    protected $table = 'lawyers_unformal_educations';

    /**
     * @var array
     */
    protected $guarded = [];
}
