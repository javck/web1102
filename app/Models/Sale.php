<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $casts = ['remark' => 'array'];

    public function customer()
    {
        return $this->belongsTo(Customer::class)->withPivot('qty', 'unit_price');
    }

    public function getTypeAttribute($value)
    {
        if ($value == '1') {
            return '一般單';
        } elseif ($value == '2') {
            return '特殊單';
        } elseif ($value == '3') {
            return '急單';
        } else {
            return '未知';
        }
    }

    public function getTypeName()
    {
        if ($this->type == '1') {
            return '一般單';
        } elseif ($this->type  == '2') {
            return '特殊單';
        } elseif ($this->type  == '3') {
            return '急單';
        } else {
            return '未知';
        }
    }

    public function getTotalAttribute()
    {
        return $this->sub_total + $this->tax;
    }

    public function setShippingStateAttribute($value)
    {
        $result = '';
        if ($value == '遺失') {
            $result = 'Miss';
        } else {
            $result = 'Unknown';
        }
        $this->attributes['shipping_state'] = $result;
    }
}
