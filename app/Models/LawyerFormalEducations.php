<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Lawyers;

class LawyerFormalEducations extends Model
{
    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];

	protected $hidden = ['id', 'lawyers_id'];

    /**
     * @var string
     */
    protected $table = "lawyers_formal_educations";

    /**
     * Get the post that owns the comment.
     */
    public function lawyers()
    {
        return $this->belongsTo(Lawyers::class, 'lawyers_id');
    }


}
