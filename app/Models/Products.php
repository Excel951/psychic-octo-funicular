<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Products extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'product_id',
        'picture',
        'code',
        'name',
        'is_have_stock',
        'price',
        'stock',
    ];

    public function sellingDetails()
    {
        return $this->hasMany(SellingDetail::class, 'product_id');
    }
}
