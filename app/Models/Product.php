<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $visible = ['id', 'price', 'product_name'];

    protected $casts = ['price'=> PriceCast::class];


    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeView(Builder $builder)
    {
        return $builder->where('view', '>', 500);
    }

    public function scopePopular(Builder $builder)
    {
        return $builder->where('sold', '>', 25);
    }

    public function scopeName(Builder $builder, $name)
    {
        return $builder->where('product_name', 'like', "%$name%");
    }

}
