<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'port_id';

    protected $table = 'ports';
    
    protected $fillable = [
        'port_name',
        'latitude',
        'longitude'
    ];

    public function records() {
        return $this->belongsTo(Record::class);
    }

    public function scopeSearch($query, $term) {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('port_name','like', $term)->orWhere('latitude', 'like', $term)->orWhere('longitude', 'like', $term);
        });
    }
}
