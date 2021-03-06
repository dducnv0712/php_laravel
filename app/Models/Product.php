<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\isEmpty;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        "name",
        "image",
        "description",
        "brand_id",
        "price",
        "qty",
        "category_id"
    ];
    /**
     * @var mixed
     */

    public function Category(){
//        return $this->belongsTo(Category::class,"category_id","id");
        return $this->belongsTo(Category::class);// phai khoa ngoai la category_id va khoa chinh ben category la id
        // return $this->belongsTo(Model::class,"model_id","id") -> return $this->belongsTo(Model::class)
    }

    public function Brand(){
//        return $this->belongsTo(Category::class,"category_id","id");
        return $this->belongsTo(Brand::class);// phai khoa ngoai la category_id va khoa chinh ben category la id
        // return $this->belongsTo(Model::class,"model_id","id") -> return $this->belongsTo(Model::class)
    }

    public function scopeSearch($query,$search){
        if($search == "" || $search=null){
            return $query;
        }
        return $query->where("name","LIKE","%$search%");
    }
}
