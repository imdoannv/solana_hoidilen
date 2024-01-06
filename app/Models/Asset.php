<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'referenceId',
        'eventId',
        'point',
        'description',
        'imageUrl',
        'name',
    ];
}
