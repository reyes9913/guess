<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuesaZone;

class GuesaCope extends Model
{
    use HasFactory;

    public function zonas()
    {
        return $this->hasMany(GuesaZone::class);
    }
}
