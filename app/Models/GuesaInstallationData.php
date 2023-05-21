<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuesaInstallationData extends Model
{
    use HasFactory;

    public function copper()
    {

        return $this->belongsTo(GuesaMediumCopper::class, 'medium_coppers_id');

    }

    public function fiber()
    {

        return $this->belongsTo(GuesaMediumFiber::class, 'medium_fibers_id');

    }
}
