<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Services;
use App\Models\LawyerSchedule;

class ServiceDetails extends Model
{
    //
    protected $table = 'service_details';

    protected $guarded = [];

    /**
     * Get the comments for the blog post.
     */
    public function service()
    {
        return $this->belongsTo(Services::class, "service_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lawyer_schedule()
    {
        return $this->hasMany(LawyerSchedule::class);
    }

    /**
     * @param $request
     * @param $service
     * @return bool
     */
    public function updateData($request, $service)
    {
        return $this->update([
            'service_name' => $request->service_name,
            'price' => str_replace( ',', '', $request->price ),
            'management_fee' => str_replace( ',', '', $request->management_fee ),
            'discount' => str_replace( ',', '', $request->discount ),
            'tax' => str_replace( ',', '', $request->tax),
        ]);
    }
}
