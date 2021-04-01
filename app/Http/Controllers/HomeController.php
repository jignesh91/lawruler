<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;
use \stdClass;
use DB;

class HomeController extends Controller
{
    public function __construct() {
        $this->addMsg = "Thank you!";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lawrulerform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $status = 1;
        $msg = $this->addMsg;
        $response = array();

        $validator = Validator::make($request->all(), [
            'FullName' => 'required',
            'City' => 'required',
            'State' => 'required',
            'Zip' => 'required',
            'CellPhone' => 'required',
        ]);

        if ($validator->fails()) 
        {
            $messages = $validator->messages();
            
            $status = 0;
            $msg = "";
            
            foreach ($messages->all() as $message) 
            {
                $msg .= $message . "<br />";
            }
        }
        else
        {
            
            $key = env('API_KEY');
            $curl_data['Key'] = $key;

            $curl_data["FullName"] = isset($request->FullName)?$request->FullName:'';
            $curl_data["CellPhone"] = isset($request->CellPhone)?$request->CellPhone:'';
            $curl_data["BusinessPhone"] = isset($request->BusinessPhone)?$request->BusinessPhone:'';
            $curl_data["HomePhone"] = isset($request->HomePhone)?$request->HomePhone:'';
            $curl_data["Mailing Address 1"] = isset($request->Mailing)?$request->Mailing:'';
            $curl_data["City"] = isset($request->City)?$request->City:'';
            $curl_data["State"] = isset($request->State)?$request->State:'';
            $curl_data["Zip"] = isset($request->Zip)?$request->Zip:'';
            $curl_data["custom597"] = isset($request->custom597)?$request->custom597:'';
            $curl_data["custom599"] = isset($request->custom599)?$request->custom599:'';
            $curl_data["DOB"] = isset($request->DOB)?$request->DOB:'';
            $curl_data["custom598"] = isset($request->custom598)?$request->custom598:'';
            $curl_data["custom600"] = isset($request->custom600)?$request->custom600:'';
            $curl_data["custom601"] = isset($request->custom601)?$request->custom601:'';
            $curl_data["custom602"] = isset($request->custom602)?$request->custom602:'';
            $curl_data["custom603"] = isset($request->custom603)?$request->custom603:'';
            $curl_data["custom604"] = isset($request->custom604)?$request->custom604:'';
            $curl_data["custom605"] = isset($request->custom605)?$request->custom605:'';
            $curl_data["custom606"] = isset($request->custom606)?$request->custom606:'';
            $curl_data["custom607"] = isset($request->custom607)?$request->custom607:'';
            $curl_data["custom608"] = isset($request->custom608)?$request->custom608:'';
            $curl_data["custom609"] = isset($request->custom609)?$request->custom609:'';
            $curl_data["custom610"] = isset($request->custom610)?$request->custom610:'';
            $curl_data["custom611"] = isset($request->custom611)?$request->custom611:'';
            $curl_data["SSN"] = isset($request->SSN)?$request->SSN:'';
            $curl_data["custom612"] = isset($request->custom612)?$request->custom612:'';
            $curl_data["custom613"] = isset($request->custom613)?$request->custom613:'';
            $curl_data["custom614"] = isset($request->custom614)?$request->custom614:'';
            $curl_data["custom615"] = isset($request->custom615)?$request->custom615:'';
            $curl_data["custom616"] = isset($request->custom616)?$request->custom616:'';
            $curl_data["custom617"] = isset($request->custom617)?$request->custom617:'';
            $curl_data["custom618"] = isset($request->custom618)?$request->custom618:'';
            $curl_data["custom619"] = isset($request->custom619)?$request->custom619:'';
            $curl_data["custom620"] = isset($request->custom620)?$request->custom620:'';
            $curl_data["custom621"] = isset($request->custom621)?$request->custom621:'';
            $curl_data["custom622"] = isset($request->custom622)?$request->custom622:'';
            $curl_data["custom623"] = isset($request->custom623)?$request->custom623:'';
            $curl_data["custom624"] = isset($request->custom624)?$request->custom624:'';
            $curl_data["custom625"] = isset($request->custom625)?$request->custom625:'';
            $curl_data["custom633"] = isset($request->custom633)?$request->custom633:'';
            $curl_data["custom626"] = isset($request->custom626)?$request->custom626:'';
            $curl_data["custom627"] = isset($request->custom627)?$request->custom627:'';
            $curl_data["custom628"] = isset($request->custom628)?$request->custom628:'';
            $curl_data["custom629"] = isset($request->custom629)?$request->custom629:'';
            $curl_data["custom630"] = isset($request->custom630)?$request->custom630:'';
            $curl_data["custom631"] = isset($request->custom631)?$request->custom631:'';
            $curl_data["custom632"] = isset($request->custom632)?$request->custom632:'';
            $curl_data["custom634"] = isset($request->custom634)?$request->custom634:'';
            $curl_data["custom635"] = isset($request->custom635)?$request->custom635:'';
            $curl_data["custom636"] = isset($request->custom636)?$request->custom636:'';
            $curl_data["custom637"] = isset($request->custom637)?$request->custom637:'';
            $curl_data["custom638"] = isset($request->custom638)?$request->custom638:'';
            $curl_data["custom639"] = isset($request->custom639)?$request->custom639:'';
            $curl_data["custom640"] = isset($request->custom640)?$request->custom640:'';
            $curl_data["custom641"] = isset($request->custom641)?$request->custom641:'';

            // static data
            $curl_data["LeadProvider"]="LegalCalls";
            $curl_data["Hear"]="LegalCalls";
            $curl_data["CaseType"]="Paraquat";
            // dynamic data

            $url = 'https://wagstafflaw.lawruler.com/lawruler-parsing.aspx';
        
            $ch = curl_init();
            $data = http_build_query($curl_data);
            $getUrl = $url."?".$data;

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_URL, $getUrl);
            curl_setopt($ch, CURLOPT_TIMEOUT, 80);

            $api_response = curl_exec($ch);

            if(curl_error($ch))
            {
                $response["message"] = curl_error($ch);
                $status = 0;
                $msg = "Something went wrong !";
            }
            else
            {
                $response["message"] = str_replace("<br/>","",$api_response);
                $status = 1;
                $msg = "Thank you!";
            }

        }

        return ['status' => $status, 'msg' => $msg, 'data' =>$response];
    }
}
