<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['key', 'label', 'value', 'type'];
    protected static function boot() 
    {
        parent::boot();
        static::updating(function($model){
            if(empty($model->value)) {
                Storage::disk('public')->delete($model->getOriginal('value'));
            } elseif ($model->isDirty('value') && ($model->getOriginal('value')) !== NULL) {
                Storage::disk('public')->delete($model->getOriginal('value'));
            }
        });
    }
}
