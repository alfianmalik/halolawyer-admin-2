<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Musonza\Chat\Traits\Messageable;
use Illuminate\Notifications\Notifiable;

class Lawyers extends Model
{
    use HasFactory, Notifiable, Messageable;

    protected $guarded = ["created_at", "updated_at"];

    protected $hidden = ['id', 'user_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'lawyers_since' => 'datetime:Y-m-d',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function educations()
    {
        return $this->hasMany(LawyerFormalEducations::class, 'lawyers_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function lawyers_unformal_educations()
    {
        return $this->hasMany(LawyerNonFormalEducations::class, 'lawyers_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function lawyers_specialization()
    {
        return $this->hasMany(LawyerSpecialization::class, 'lawyers_id');
    }

    /**
     * 
     */
    public function lawyers_case_experience()
    {
        return $this->hasMany(LawyerCaseExperiences::class, 'lawyers_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function lawyers_category()
    {
        return $this->hasMany(LawyersCategory::class, 'lawyers_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function lawyers_schedule()
    {
        return $this->hasMany(LawyerSchedule::class, 'lawyers_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function lawyers_journal()
    {
        return $this->hasMany(EJournal::class, 'lawyers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lawyers_workarea()
    {
        return $this->hasMany(LawyerWorkArea::class, 'lawyers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lawyers_law_firm()
    {
        return $this->hasOne(LawyersLawFirm::class, 'lawyers_id');
    }

    /**
     * 
     */
    public function account_number()
    {
        return $this->hasOne(LawyersAccountNumber::class, 'lawyers_id');
    }
    
    /**
     * @param $data
     * @param $lawyer
     * @return bool
     */
    public function updateData($data, $lawyer)
    {
    	return $this->update([
    		'location' => $data->location,
    		'expertise_specialization' => $data->expertise_specialization,
    		'consultation' => $data->consultation,
            'is_favorite' => $data->is_favorite?1:0,
            'is_special' => $data->is_special?1:0,
    	]);
    }

    /**
     * @return mixed
     */
    public function lawyersSince()
    {
        return $this->lawyers_since->format('M d Y');
    }
}
