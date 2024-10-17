<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurPrinciple extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'subtitle',
        'name',
        'thumbnail',
        'icon',
    ];

    /**
     * Get the keypoints associated with the principle.
     */
    public function keypoints()
    {
        return $this->hasMany(Keypoint::class, 'our_principle_id'); // Ensure to use the correct model
    }
}
