<?php

namespace App\Http\Controllers;

use App\Models\GuesaGeneratedOrder;
use App\Models\GuesaInstallationData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TechnicalController extends Controller
{
    public function index()
    {
        //  $modoOscuro = obtenerModoOscuro();
        return view('technical.index');
    }

    public function indexOrders($id)
    {

        $status = 'Asignada';
        $guesaGeneratedOrder = GuesaGeneratedOrder::where('user_id', $id)->whereHas('order_status', function ($query) use ($status) {
            $query->where('order_status', $status);
        })->get();
        return view('technical.orders.index', ['guesaGeneratedOrder' => $guesaGeneratedOrder]);
    }

    public function showOrdersDetailCopperOrFiber($id, $instalationData)
    {

        $guesaInstalacionData = GuesaInstallationData::where('number_order', 'like', '%' . $instalationData . '%')->first();
        $guesaGeretatedOrder = GuesaGeneratedOrder::where('id', $id)->first();

        if ($guesaInstalacionData->medium_coppers_id != null) {


            return view('technical.orders.details.copper', [
                'guesaGeneratedOrder' => $guesaGeretatedOrder,
                'guesaInstalacionData' => $guesaInstalacionData
            ]);
        } else {

            return view('technical.orders.details.fiber', [
                'guesaGeneratedOrder' => $guesaGeretatedOrder,
                'guesaInstalacionData' => $guesaInstalacionData
            ]);
        }
    }

    public function indexRecord()
    {

        return view('technical.record.index');
    }

    public function executeOrderCopper()
    {

        return view('technical.orders.details.execute.copper');
    }

    public function storeOrderFiber(Request $request, GuesaGeneratedOrder $guesaGeneratedOrder)
    {

        $validate = $request->validate([
            'number_order' => 'required',
            'principal_par' => 'required',
            'principal_sec' => 'required',
            'strip' => 'required',
            'divice' => 'required',
            'footage_type' => 'required',
            'phone' => 'required',
            'os_type' => 'required',
            'os_number' => 'required',
            'pisaplex' => 'required',
            'district' => 'required',
            'port' => 'required',
            'terminal' => 'required',
            'contracted_speed' => 'required',
            'delivered_speed' => 'required'
        ]);

        DB::beginTransaction();

        try{




        }catch(\Exception $e){
            DB::rollBack();
            throw $e;
        }
    }
}
