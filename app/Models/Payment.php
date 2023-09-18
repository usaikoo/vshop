<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['order_id', 'status', 'amount', 'type',  'created_by', 'updated_by'];

    use HasFactory;
    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
