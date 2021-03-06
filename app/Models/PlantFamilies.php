<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property integer $id
 * @property string $name
 *
 * @property PlantFamilies $family
 */
class PlantFamilies extends Model
{
    use HasFactory;

    protected $table = 'plant_families';
}
