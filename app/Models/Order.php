<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'price'];

    protected static function boot() 
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('image') && ($model->getOriginal('image')) !== NULL) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }
}
