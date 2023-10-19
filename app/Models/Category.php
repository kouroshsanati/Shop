<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Category extends Model
{
    use HasFactory;

    protected $with = ['parent'];

    protected $hidden = ['created_at', 'updated_at'];


    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function scopeOriginal(Builder $builder)
    {
        return $builder->where('parent_id', null);
    }

    public function scopeShow(Builder $builder)
    {
        return $builder->where('status', 1);
    }

    public function getStatusAttribute($value)
    {
        if ($value == 1) {
            return 'منتشر شده';
        } else {
            return  'منتشر نشده';
        }
        //return $value ?? 'ندارد';

    }
    public function getParentIdAtrribute($value)
    {
        if  (!isset($value)) {
            return 'ندارد ';
        } else {
            return  $value;
        }
        //return $value ?? 'ندارد';

    }


}
