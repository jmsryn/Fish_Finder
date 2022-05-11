<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'fish_id',
        'port_id',
        'catch',
        'status',
        'date',
        'price_from',
        'price_to',
    ];

    public function portsModel() {
        return $this->belongsTo(Port::class, foreignKey: 'port_id', ownerKey: 'port_id');
    }

    public function fishModel() {
        return $this->belongsTo(Fish::class, foreignKey: 'fish_id', ownerKey: 'fish_id');
    }

    public function scopeSearch($query, $term) {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('port_name','like', $term)->orWhere('fish_name', 'like', $term)->orWhere('local_name', 'like', $term);
        });
    }
}
