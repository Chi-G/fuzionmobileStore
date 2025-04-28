<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total',
        'status',
        'delivery_name',
        'delivery_email',
        'delivery_country',
        'delivery_city',
        'delivery_phone',
        'delivery_company_name',
        'delivery_vat_number',
        'payment_method',
        'delivery_method',
        'payment_intent_id',
    ];

    /**
     * Get the items for the order.
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * Get the user that owns the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
