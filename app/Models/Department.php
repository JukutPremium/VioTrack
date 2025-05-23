<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function generations()
    {
        return $this->hasMany(Generation::class);
    }

    public function classes()
    {
        return $this->hasMany(ClassRoom::class);
    }

}
