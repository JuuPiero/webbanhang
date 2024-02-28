<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'note',
        'total_amount',
        'phone_number',
        'status',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
