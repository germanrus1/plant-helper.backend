<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;

    protected $table = 'plants';

    public function type()
    {
        return $this->hasOne(PlantTypes::class);
    }
    public function fruit()
    {
        return $this->hasOne(PlantFruits::class);
    }
    public function family()
    {
        return $this->hasOne(PlantFamilies::class);
    }
    public function edible()
    {
        return $this->hasOne(PlantEdibles::class);
    }
    public function photosensitivity()
    {
        return $this->hasOne(PlantPhotosensitivity::class);
    }
}
