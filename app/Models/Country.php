<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function shops()
    {
        return $this->hasManyThrough(Shop::class, City::class);
    }

    public function employees()
    {
        return $this->hasManyDeep(Employee::class, [City::class, Shop::class]);
    }
}
