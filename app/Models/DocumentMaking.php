<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class DocumentMaking extends Model
{

    protected $guarded = [];

    /**
     * 
     */
    public function updateData($req)
    {
        
    	return $this->update([
    		'title' => $req->title,
            'making_by' => $req->making_by,
            'needed' => Str::slug($req->needed),
            'price' => $req->price,
            'discount' => $req->discount,
            'finished' => $req->finished
    	]);
    }
}
