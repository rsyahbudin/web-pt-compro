<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keypoint extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'keypoint',
        'manufacture',
        'our_principle_id', // Foreign key to our_principles
    ];

    /**
     * Get the principle that owns the keypoint.
     */
    public function ourPrinciple()
    {
        return $this->belongsTo(OurPrinciple::class, 'our_principle_id'); // Defines inverse relationship
    }
}
