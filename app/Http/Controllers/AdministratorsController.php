<?php

namespace App\Http\Controllers;


use App\Models\GuesaZone;
use Illuminate\Http\Request;
use App\Models\GuesaUser;
use App\Models\GuesaCope;
use App\Models\GuesaCustomer;
use App\Models\GuesaOrdersPDF;
use App\Models\GuesaInstallationData;
use App\Models\GuesaPhotoAlbum;
use App\Models\GuesaGeneratedOrder;
use App\Models\GuesaOrderStatus;
use App\Models\GuesaMediumCopper;
use App\Models\GuesaMediumFiber;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use Illuminate\Validation\Rule;


class AdministratorsController extends Controller
{
    public function index()
    {
        return view('administrators.index');
    }

    //Mothod for guesaUsers

    public function createUsers()
    {
        $guesaCopes = GuesaCope::all();
        return view('administrators.User.create', ['guesaCopes' => $guesaCopes]);
    }

    public function getZonas($id)
    {
        $id = 1;
        $guesaZones = GuesaZone::where('cope_id', $id)->pluck('name', 'id');
        return json_encode($guesaZones);
    }


    public function storeUsers(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'cope' => 'required|',
            'zones_id' => 'required|string|max:255',
            'role' => 'required|in:super_admin,admin,technical',
            'email' => 'required|string|email|max:255|unique:guesa_users,email|ends_with:@guesa.com',
            'password' => 'min:8|max:255',
            'confirm-password' => 'same:password'
        ]);

        $guesaUser = new GuesaUser;
        $guesaUser->name = $validatedData['name'];
        $guesaUser->zones_id = $validatedData['zones_id'];
        $guesaUser->role = $validatedData['role'];
        $guesaUser->email = $validatedData['email'];
        $guesaUser->password = bcrypt($validatedData['password']);
        $guesaUser->on_line = 0;
        $guesaUser->save();

        session()->flash('status', 'Usuario registrado');

        return to_route('administrators.index');

    }

    public function editUsers(GuesaUser $guesaUser)
    {
        $guesaCopes = GuesaCope::all();
        $guesaZones = GuesaZone::all();
        $copes_id = $guesaUser->byZones->copes_id;
        return view('administrators.User.edit', [
            'guesaUser' => $guesaUser,
            'guesaCopes' => $guesaCopes,
            'guesaZones' => $guesaZones,
            'copes_id' => $copes_id
        ]);

    }

    public function showUserOnTable()
    {

        $guesaUsers = GuesaUser::all();
        return view('administrators.User.show', ['guesaUsers' => $guesaUsers]);

    }

    public function updateUsers(Request $request, GuesaUser $guesaUser)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'zones_id' => 'required|string|max:255',
            'cope' => 'required',
            'role' => 'required|in:super_admin,admin,technical',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('guesa_users')->ignore($guesaUser->id),
                'ends_with:@guesa.com',
            ],
            'password' => 'nullable|min:8',
            'confirm-password' => 'nullable|min:8|same:password'
        ]);

        $guesaUser->name = $validatedData['name'];
        $guesaUser->zones_id = $validatedData['zones_id'];
        $guesaUser->role = $request->input('role');
        $guesaUser->password = $validatedData['password'];

        // Excluir el correo electrónico del proceso de validación de unicidad en la consulta de actualización
        if ($guesaUser->email === $validatedData['email']) {
            $guesaUser->save();
        } else {
            $guesaUser->email = $validatedData['email'];
            $guesaUser->save(['email']);
        }

        session()->flash('status', 'Usuario actualizado');

        return to_route('administrators.user.show', $guesaUser);
    }


    //method for orders-customer

    public function createCustomers()
    {

        $guesaCustomers = GuesaCustomer::all();
        return view('administrators.orders.customers.create', ['guesaCustomers' => $guesaCustomers]);

    }

    public function storeCustomers(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number_one' => 'required|string|max:255',
            'number_two' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'between_streets' => 'required|string|max:255',
            'building' => 'required|string|max:255',
            'depto' => 'required|string|max:255',
            'city' => 'required',
            'municipality' => 'required'
        ]);

        $guesaCustomers = new GuesaCustomer;
        $guesaCustomers->name = $validatedData['name'];
        $guesaCustomers->number_one = $validatedData['number_one'];
        $guesaCustomers->number_two = $validatedData['number_two'];
        $guesaCustomers->address = $validatedData['address'];
        $guesaCustomers->between_streets = $validatedData['between_streets'];
        $guesaCustomers->building = $validatedData['building'];
        $guesaCustomers->depto = $validatedData['depto'];
        $guesaCustomers->city = $validatedData['city'];
        $guesaCustomers->municipality = $validatedData['municipality'];
        $guesaCustomers->save();

        session()->flash('status', 'Cliente registrado');

        return to_route('administrators.orders.customers.create', $guesaCustomers);
    }


    //Method for orders-coppers


    public function createNewCopperOrders()
    {
        $guesaUsers = GuesaUser::where('role', 'technical')->get();
        $guesaCopes = GuesaCope::all();
        $guesaCustomers = GuesaCustomer::all();
        return view('administrators.orders.copper.create', [
            'guesaUsers' => $guesaUsers,
            'guesaCopes' => $guesaCopes,
            'guesaCustomers' => $guesaCustomers
        ]);
    }

    public function byCustomers($search)
    {

        // Filtra los clientes que coinciden con la búsqueda
        $guesaCustomers = GuesaCustomer::where('name', 'like', '%' . $search . '%')
            ->orWhere('number_one', 'like', '%' . $search . '%')
            ->get();

        // Devuelve los clientes filtrados en formato JSON
        return response()->json($guesaCustomers);

    }

    public function byCustomersDetails($id)
    {

        $guesaCustomers = GuesaCustomer::where('id', '=', $id)->get();
        return response()->json($guesaCustomers);

    }
    public function byTechnicalDetails($name)
    {

        $guesaUser = GuesaUser::where('name', 'like', '%' . $name . '%')->where('on_line','=','1')->where('role','like','%'.'technical'.'%')->get();
        return response()->json($guesaUser);

    }


    public function storeOrdersCoppers(Request $request)
    {
        $validatedData = $request->validate([
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
            'delivered_speed' => 'required',
            'technicalSelect' => 'required',
            'nameId' => 'required',
        ]);

        DB::beginTransaction();

        try {

            $guesa_orderPdf = new GuesaOrdersPDF;
            $guesa_orderPdf->pdf_identifier = 'Guesa.pdf';
            $guesa_orderPdf->pdf_path = 'her a rute';
            $guesa_orderPdf->save();

            $guesa_order_statuses = new GuesaOrderStatus;
            $guesa_order_statuses->order_status = 'Asignada';
            $guesa_order_statuses->save();

            $guesa_medium_coppers = new GuesaMediumCopper;
            $guesa_medium_coppers->principal_par = $validatedData['principal_par'];
            $guesa_medium_coppers->principal_sec = $validatedData['principal_sec'];
            $guesa_medium_coppers->strip = $validatedData['strip'];
            $guesa_medium_coppers->divice = $validatedData['divice'];
            $guesa_medium_coppers->save();

            $guesa_photo_album = new GuesaPhotoAlbum;
            $guesa_photo_album->name_image = 'Paragu';
            $guesa_photo_album->description_image = 'Paragu';
            $guesa_photo_album->image_identifier = 'Paragu';
            $guesa_photo_album->image_path = 'Guesa';
            $guesa_photo_album->save();

            $guesa_installation_data = new GuesaInstallationData;
            $guesa_installation_data->number_order = $validatedData['number_order'];
            $guesa_installation_data->footage_type = $validatedData['footage_type'];
            $guesa_installation_data->phone = $validatedData['phone'];
            $guesa_installation_data->os_type = $validatedData['os_type'];
            $guesa_installation_data->os_number = $validatedData['os_number'];
            $guesa_installation_data->pisaplex = $validatedData['pisaplex'];
            $guesa_installation_data->district = $validatedData['district'];
            $guesa_installation_data->port = $validatedData['port'];
            $guesa_installation_data->terminal = $validatedData['terminal'];
            $guesa_installation_data->contracted_speed = $validatedData['contracted_speed'];
            $guesa_installation_data->delivered_speed = $validatedData['delivered_speed'];
            $guesa_installation_data->medium_fibers_id = null;
            $guesa_installation_data->medium_coppers_id = $guesa_medium_coppers->id;
            $guesa_installation_data->save();

            $guesa_generated = new GuesaGeneratedOrder;
            $guesa_generated->user_id = $validatedData['technicalSelect'];
            $guesa_generated->customer_id = $validatedData['nameId'];
            $guesa_generated->pdf_id = $guesa_orderPdf->id;
            $guesa_generated->installationData_id = $guesa_installation_data->id;
            $guesa_generated->order_statuses_id =  $guesa_order_statuses->id;
            $guesa_generated->photo_album_id = $guesa_photo_album->id;
            $guesa_generated->comments = '';
            $guesa_generated->save();

            DB::commit();

            return to_route('administrators.orders.index');


        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }



    }


    // //Method for Orders
    // public function showOrderCopperOrFiber($order_number)
    // {
    //     $dataByOrderNumber = GuesaInstallationData::where('order_number','like','%',$order_number,'%')->get();

    //     if ($dataByOrderNumber->medium_fibers_id != null) {
    //         return view('administrators.orders.fiber.show', ['dataByOrderNumber' => $dataByOrderNumber]);
    //     } else {

    //         return view('administrators.orders.copper.show', ['dataByOrderNumber' => $dataByOrderNumber]);
    //     }

    // }

    public function showOrderCopperOrFiber($id, $number_order, $customer, $technical, $pdf)
    {
        $dataByOrderNumber = GuesaInstallationData::where('number_order', 'like', '%' . $number_order . '%')->get();
        $dataByIdGeneratedOrder = GuesaGeneratedOrder::where('id','=', $id);
        $dataByNameCustomer = GuesaCustomer::where('name', 'like', '%' . $customer . '%');
        $dataByNameTechnical = GuesaUser::where('name', 'like', '%' . $technical . '%');
        $dataByIdPDF = GuesaOrdersPDF::where('id', '=', $pdf);

        if ($dataByOrderNumber->count() > 0) {

            $guesaInstallationData = $dataByOrderNumber->first();
            $guesa_generated_order = $dataByIdGeneratedOrder->first();
            $guesaCustomer = $dataByNameCustomer->first();
            $guesaUser = $dataByNameTechnical->first();
            $guesaOrderPDF = $dataByIdPDF->first();

            if ($guesaInstallationData->medium_fibers_id != null) {
                return view('administrators.orders.fiber.show', [
                    'guesaInstallationData' => $guesaInstallationData,
                    'guesaCustomer' => $guesaCustomer,
                    'guesa_generated_order' => $guesa_generated_order,
                    'guesaUser' => $guesaUser,
                    'guesaOrderPDF' => $guesaOrderPDF
                ]);
            } else {
                return view('administrators.orders.copper.show', [
                    'guesaInstallationData' => $guesaInstallationData,
                    'guesaCustomer' => $guesaCustomer,
                    'guesa_generated_order' => $guesa_generated_order,
                    'guesaUser' => $guesaUser,
                    'guesaOrderPDF' => $guesaOrderPDF
                ]);
            }
        } else {
            // Si no se encontró ninguna instalación con ese número de orden, mostrar un mensaje de error o redirigir a otra página
            return view('administrators.orders.index');
        }
    }





    public function createOrders()
    {

        return view('administrators.orders.create');
    }

    public function todayOrders()
    {

        return view('administrators.orders.today');


    }

    public function indexOrders()
    {
        $guesa_generated_order = GuesaGeneratedOrder::all();
        return view('administrators.orders.index', ['guesa_generated_order' => $guesa_generated_order]);

    }

    public function storeOrders()
    {

        return view('administrators.orders.create');
    }

    public function editOrders()
    {

        return view('administrators.orders.edit');
    }

    public function showOrders()
    {

        return view('administrators.orders.show');
    }

    //Method for Zones


    public function createZones()
    {
        $guesaZones = GuesaZone::all();
        $guesaCopes = GuesaCope::all();
        return view('administrators.zones.create', ['guesaZones' => $guesaZones], ['guesaCopes' => $guesaCopes]);
    }

    public function showSelectCopesOnZones()
    {
        $guesaCopes = GuesaCope::all();
        return view('administrators.zones.create', ['guesaCopes' => $guesaCopes]);

    }

    public function storeZones(Request $request)
    {

        $guesaZones = new GuesaZone;
        $guesaZones->name = $request->input('name');
        $guesaZones->copes_id = $request->input('copes_id');
        $guesaZones->save();

        session()->flash('status', 'Zona registrada');

        return to_route('administrators.zones.create', $guesaZones);


    }

    public function editZones()
    {

        return view('administrators.zones.edit');
    }

    public function showZones()
    {



    }

    public function itemSelectZones($id)
    {

        return GuesaZone::where('copes_id', $id)->get();

    }


    //Method for COPES

    public function showCopes()
    {

        $guesaCopes = GuesaCope::all();
        return view('administrators.copes.create', ['guesaCopes' => $guesaCopes]);

    }

    public function storeCopes(Request $request)
    {

        $guesaCopes = new GuesaCope;
        $guesaCopes->name = $request->input('name');
        $guesaCopes->save();

        session()->flash('status', 'Cope registrado');

        return to_route('administrators.copes.create', $guesaCopes);

    }

    public function today()
    {

        $status = 'Asignada'; // Aquí pones el estatus que deseas contar
        $countAsign = GuesaGeneratedOrder::whereHas('order_status', function ($query) use ($status) {
            $query->where('order_status', $status);
        })->count();
        return view('administrators.orders.today', ['countAsign' => $countAsign]);

    }

}
