<?php

namespace App\Models;

use Bitrix\Crm\Activity\Provider\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property integer $id
 * @property string $name
 * @property string $desctiption
 * @property string $tags
 * @property string $range
 *
 * @property PlantFamilies $family
 */
class Plants extends Model
{
    use HasFactory;

    protected $table = 'plants';
    protected $fillable = ['_csrf'];

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
