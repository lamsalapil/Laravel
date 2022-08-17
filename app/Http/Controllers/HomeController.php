<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BusList;
use App\Models\manage_seat;
use App\Models\schedule_list;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function getbusList()
    {
        $data = [
            'ListBus' => BusList::all()
        ];
        return view('admin/busList', $data);
    }

    public function postBusList(Request $request){
        
        
        $busNo1 = $request->input('Ga');
        $busNO2 = $request->input('twoNo');
        $busNo3 = $request->input('ta');
        $busNo4 = $request->input('fourNo');

        $photo = $request->file('bphoto');
        $makeuniqename = md5(time());
        // dd($makeuniqename);
        $getextansionname = $photo->getClientOriginalExtension();
        // dd($getextansionname);
        $finalname = $makeuniqename.$getextansionname;
        // dd($finalname);
        $photo->move('BusListPhoto/',$finalname);

        $buscontact = $request->input('contact');
        $busRegName = $request->input('Bname');
        $busOwner = $request->input('Bowner');


        $ListBus = new BusList();
        $ListBus->busnumber = $busNo1 .$busNO2 .$busNo3 .$busNo4;
       

        $ListBus->Photo = $finalname;
        $ListBus->Contact = $buscontact;
        $ListBus->Company = $busRegName;
        $ListBus->Owner = $busOwner;
        $ListBus->save();
        return redirect()->back();




    }

    public function getDeletebuslist(BusList $ListBus){
        $ListBus->delete();
        return redirect()->back();
    }

    public function getEditbuslist(BusList $ListBus){
        
        $adata=[
            'BusList'=> $ListBus
            

        ];

        return view('pages.BusListeditpage',$adata);
    }

    public function postEditbusdetail(Request $request, BusList $ListBus){
        if($request->file('bphoto')){
            // echo 'photo';
            $photo=$request->file('bphoto');

            $makeuniqename = md5(time());
            // dd($makeuniqename);
            $getextansionname = $photo->getClientOriginalExtension();
            // dd($getextansionname);
            $finalname = $makeuniqename.$getextansionname;
            // dd($finalname);
            $photo->move('BusListPhoto/',$finalname);
            $ListBus->busnumber = $request->input('bnumber');
            $ListBus->Photo=$finalname;
            $ListBus->Contact = $request->input('contact');
            $ListBus->Company = $request->input('bname');
            $ListBus->Owner = $request->input('bowner');
            
            $ListBus->save();

            return redirect()->back();

        }else{
            // echo 'no photo';
            $ListBus->busnumber = $request->input('bnumber');
            $ListBus->Contact = $request->input('contact');
            $ListBus->Company = $request->input('bname');
            $ListBus->Owner = $request->input('bowner');
            $ListBus->save();
            
              
        }
        return redirect()->route('getbusList');

    }


    public function getSchedulebus($bus){
        $data =[
            'bus_id' =>$bus,
            'busSchedule' => schedule_list::where('bus_id', $bus)->get()
        ];
        return view('admin/schedule', $data);

        
    }

    public function postScheduleList(Request $request){

        $busNumber= $request->input('busId');
        $busdate= $request->input('busdate');
        $busfrom= $request->input('placefrom');
        $busto= $request->input('placeTo');
        $busTime= $request->input('startTime');
        $busduration= $request->input('duration');
        $busseats= $request->input('seatsBus');
        

        $busSchedule = new schedule_list();
        $busSchedule->bus_id = $busNumber;
        $busSchedule->date = $busdate;
        $busSchedule->from = $busfrom;
        $busSchedule->to = $busto;
        $busSchedule->time = $busTime;
        $busSchedule->duration = $busduration;
        $busSchedule->seat_number = $busseats;
        
        $busSchedule->save();

        return redirect()->back();

        

    }

    public function getManageSeat($Bus){
        
        $data =[
            'bus_id' =>$Bus,
            'busSeatManage'=>manage_seat::where('bus_id', $Bus)->get()
            
        ];
        return view('admin/manageSeat',$data);
    }


    public function postManageSeat(Request $request, $bus){
   
        $busseat=$request->input('busseat');
        $Busposition=$request->input('busposition');

        $busmanage = new manage_seat;
        $busmanage->Bus_id=$bus;
        $busmanage->seat_number=$busseat;
        $busmanage->seat_position=$Busposition;
        $busmanage->save();

        return redirect()->back();


    }
}
