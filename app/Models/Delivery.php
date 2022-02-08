<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory, SoftDeletes;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    // Scope Active for bidding
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
