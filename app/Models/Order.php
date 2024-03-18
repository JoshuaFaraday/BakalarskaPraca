<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderStates() {
        return $this->belongsToMany(OrderState::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'price',
    ];

    public function variants()
    {
        return $this->belongsToMany(Variant::class, 'orders_variants')
            ->withPivot('quantity', 'price_per_item');
    }

}
