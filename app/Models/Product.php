<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'unit', 'itm_code', 'supplier_id', 'category_id', 'min_qty', 'cost', 'unit_price', 'qty_instock', 'status', 'remark'];

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('qty', 'unit_price');
    }
}
