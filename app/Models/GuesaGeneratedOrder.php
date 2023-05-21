<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuesaCustomer;

class GuesaGeneratedOrder extends Model
{
    use HasFactory;

    public function installationData(){

        return $this->belongsTo(GuesaInstallationData::class, 'installationData_id');


    }

    public function technical(){

        return $this->belongsTo(GuesaUser::class, 'user_id');


    }

    public function customer(){

        return $this->belongsTo(GuesaCustomer::class, 'customer_id');

    }

    public function order_status()
    {

        return $this->belongsTo(GuesaOrderStatus::class, 'order_statuses_id');


    }
}
