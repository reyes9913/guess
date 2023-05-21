<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuesaCope;

class GuesaZone extends Model
{
    use HasFactory;

    public function cope()
    {
        return $this->belongsTo(GuesaCope::class, 'copes_id');
    }
}
