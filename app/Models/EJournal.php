<?php

namespace App\Models;

use App\Http\Controllers\CategoryEjournalController;
use Illuminate\Database\Eloquent\Model;

class EJournal extends Model
{
    //
    /**
     * @var string
     */
    protected $table = 'ejournal';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $appends = ['category_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(CategoryEjournal::class, 'id', 'category_id');
    }

    /**
     * @return string
     */
    public function setCategoryNameAttribute()
    {
        $this->attributes['category_name'] = $this->category->name;;
    }

    /**
     * @param $value
     * @return string
     */
    public function getCategoryNameAttribute($value)
    {
        return $this->category->name;
    }
}
