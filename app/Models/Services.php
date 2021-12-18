<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceDetails;

class Services extends Model
{
    protected $table = 'service';

    /**
     *
     */
    protected $guarded = [];

    /**
     *
     */
    protected $casts = [ 'discount' => 'float', 'price' => 'integer', 'tax' => 'integer', "integer_attribute" => 'int'];

    /**
     * Get the comments for the blog post.
     */
    public function service_details()
    {
        return $this->hasMany(ServiceDetails::class, "service_id");
    }

    /**
     *
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
