<?php

namespace App\Models;

use App\Lawyers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Activitylog\Traits\LogsActivity;

class Order extends Model
{
    use LogsActivity;

    /**
     * @var string
     */
	protected $table = 'orders';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasOne(Transactions::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service_details()
    {
        return $this->belongsTo(ServiceDetails::class, "service_details_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lawyers()
    {
        return $this->belongsTo(User::class, "lawyer_uuid");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    /**
     * @param Request $request
     * @param $lawyer
     * @param $user
     * @param null $kategori
     * @param $service
     * @return mixed
     */
    public static function adding(Request $request, $lawyer, $user, $service, $lawyerSchedule)
    {

    	$uuid = Str::uuid();
    	$inv_id = explode('-', $uuid);
    	return Order::create([
    		'order_uuid' => $uuid,
    		'invoice_id' => $inv_id[3],
    		'service_id' => $service->service->id,
            'service_details_id' => $service->id,
    		'service_name' => $service->service->service_name,
    		'service_price' => $service->price,
    		'lawyer_uuid' => $lawyer->uuid,
    		'lawyer_name' => $lawyer->first_name.' '.$lawyer->last_name,
    		'lawyer_schedule' => $lawyerSchedule->id,
    		'catatan' => $request->catatan,
    		'user_id' => $user->id,
            'user_name' => $user->first_name.' '.$user->last_name,
    		'user_first_name' => $user->first_name,
            'user_last_name' => $user->last_name,
    		'user_email' => $user->email,
    		'user_phone' => $user->phone,
    		'management_fee' => $service->management_fee,
    		'total' => $service->management_fee + $service->price
    	]);
    }

    /**
     *
     */
    public static function addingOrderDocument(Request $request, $lawyer, $user, $service, $document)
    {
        $uuid = Str::uuid();
        $inv_id = explode('-', $uuid);
        return Order::create([
            'order_uuid' => $uuid,
            'invoice_id' => $inv_id[3],
            'service_id' => $service->service->id,
            'service_name' => $service->service->service_name,
            'service_price' => $document->price - $document->discount,
            'service_details_id' => $service->id,
            'lawyer_uuid' => $request->lawyer,
            'lawyer_name' => $lawyer->first_name.' '.$lawyer->last_name,
            'makingdocuments_service_id' => $document->id,
            'makingdocuments_service_name' => $document->title,
            'user_id' => $user->id,
            'user_name' => $user->first_name.' '.$user->last_name,
            'user_first_name' => $user->first_name,
            'user_last_name' => $user->last_name,
            'user_email' => $user->email,
            'user_phone' => $user->phone,
            'management_fee' => 0,
            'total' => $document->price - $document->discount
        ]);
    }

}
