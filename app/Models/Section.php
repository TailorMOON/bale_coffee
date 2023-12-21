<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'background', 'thumbnail', 'pruduct_name', 'content', 'post_as'];

    protected static function boot() 
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail')) !== NULL) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
            if($model->isDirty('background') && ($model->getOriginal('background')) !== NULL) {
                Storage::disk('public')->delete($model->getOriginal('background'));
            }
        });
    }
}
