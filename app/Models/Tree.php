<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    use HasFactory;

    protected $table = 'tree';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'tags',
        'edible'
    ];

    public function culture()
    {
        return $this->hasOne(Tree_culture::class);
    }
}
