<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'fish_name',
        'local_name',
        'scientific_name',
        'feature',
        'development',
        'diet',
        'image',
        'top_fish'
    ];

    protected $primaryKey = 'fish_id';

    protected $guarded = [];

    public function records() {
        return $this->belongsTo(Record::class);
    }

    public function scopeSearch($query, $term) {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('fish_name','like', $term)->orWhere('scientific_name', 'like', $term)->orWhere('local_name', 'like', $term);
        });
    }
}
