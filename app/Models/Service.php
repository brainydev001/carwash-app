<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Body types
     */
    public function bodyTypes()
    {
        return $this->belongsToMany(BodyType::class, 'prices', 'body_type_id', 'service_id');
    }
}
