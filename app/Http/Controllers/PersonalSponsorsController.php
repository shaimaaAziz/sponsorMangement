<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Governorate;
use App\Nationality;
use App\Neighborhood;
use App\PersonalSponsor;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\DB;

class PersonalSponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personel = DB::table('personal_sponsors')->Paginate(2);
        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $neighborhood=Neighborhood::all();
        $nationality=Nationality::all();

        return view('personel.index',compact('personel','country','city','governorate',
            'neighborhood','nationality'));

    }


    public function searchGet(){
        $personel = DB::table('personal_sponsors')->Paginate(2);
        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $nationality=Nationality::all();

        return view('personel.search',compact('personel','country','city','governorate',
           'nationality'));
    }

    public function searchPost(Request $request){


//        $firstName= $request->firstName;
//        $secondName= $request->secondName;
//        $thirdName= $request->thirdName;
//        $fourthName= $request->fourthName;
//        $addressDetails =$request->addressDetails;
//        $telephoneNumber =$request->telephoneNumber;
//        $CountryOfResidence =$request->CountryOfResidence;

//        $personel = DB::table('personal_sponsors')->Paginate(2);

        if ($request->type === 'شخصي') {

            $personel = PersonalSponsor::query()
                ->where('firstName', 'LIKE', "%{$request->firstName}%")
                ->orWhere('secondName', 'LIKE', "%{ $request->secondName}%")
                ->orWhere('thirdName', 'LIKE', "%{$request->thirdName}%")
                ->orWhere('fourthName', 'LIKE', "%{$request->fourthName}%")
                ->orWhere('addressDetails', 'LIKE', "%{$request->addressDetails}%")
                ->orWhere('telephoneNumber', 'LIKE', "%{$request->telephoneNumber}%")
                ->orWhere('CountryOfResidence', 'LIKE', "%{$request->CountryOfResidence}%")
                ->get();

            return view('personel.search', compact('personel'));
        }

        elseif ($request->type === 'مؤسسي') {

            $personel = PersonalSponsor::query()
                ->where('firstName', 'LIKE', "%{$request->firstName}%")
                ->orWhere('secondName', 'LIKE', "%{ $request->secondName}%")
                ->orWhere('thirdName', 'LIKE', "%{$request->thirdName}%")
                ->orWhere('fourthName', 'LIKE', "%{$request->fourthName}%")
                ->orWhere('addressDetails', 'LIKE', "%{$request->addressDetails}%")
                ->orWhere('telephoneNumber', 'LIKE', "%{$request->telephoneNumber}%")
                ->orWhere('CountryOfResidence', 'LIKE', "%{$request->CountryOfResidence}%")
                ->get();

            return view('personel.search', compact('personel'));
        }
        else{
            return('no data match');
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personel = PersonalSponsor::all();

        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $neighborhood=Neighborhood::all();
        $nationality=Nationality::all();


        return view('personel.create',compact('personel','country','city','governorate',
            'neighborhood','nationality'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
//        $this->validate($request, [
//            'firstName' => 'required',
//            'secondName' => 'required',
//            'thirdName' => 'required',
//            'fourthName' => 'required',
//            'email' => 'required|email',
////            'governorate'=>'required',
//            'city'=>'required',
//            'neighborhood'=>'required',
//            'mobileNumber'=>'required',
//            'nationality'=>'required',
//            'CountryOfResidence'=>'required',
//            'definitionType'=>'required',
//            'ContactPerson'=>'required',
//            'telephoneNumber' =>['required','integer', 'min:0'],
//            'telephoneNumber2' =>['required','integer', 'min:0'],
//            'identificationNumber' =>['required','integer', 'min:0'],
//            'addressDetails' => ['required', 'string'],

//        ]);


        $personal = new PersonalSponsor();

        if ($request->type === 'شخصي') {


            $personal->type = $request->type;
            $personal->password = $request->password1;
            $personal->firstName = $request->firstName;
            $personal->secondName = $request->secondName;
            $personal->thirdName = $request->thirdName;
            $personal->fourthName = $request->fourthName;
            $personal->identificationNumber = $request->identificationNumber;
            $personal->definitionType = $request->definitionType;
            $personal->governorate = $request->governorate;
            $personal->city = $request->city;
            $personal->neighborhood = $request->neighborhood;
            $personal->addressDetails = $request->addressDetails;
            $personal->telephoneNumber = $request->telephoneNumber;
            $personal->mobileNumber = $request->mobileNumber;
            $personal->email = $request->email;
            $personal->CountryOfResidence = $request->CountryOfResidence;
            $personal->nationality = $request->nationality;

        }

        elseif ($request->type == "مؤسسي"){
            $personal->password = $request->password;

            $personal->type = $request->type;
            $personal->firstName = $request->firstName1;

        $personal->secondName = $request->secondName1;
        $personal->thirdName = $request->thirdName1;
        $personal->fourthName = $request->fourthName1;

        $personal->addressDetails = $request->addressDetails1;
        $personal->telephoneNumber = $request->telephoneNumber1;
        $personal->telephoneNumber2 = $request->telephoneNumber2;
        $personal->ContactPerson = $request->ContactPerson;
        $personal->email = $request->email1;
        $personal->CountryOfResidence = $request->CountryOfResidence1;
    }

        $personal->save();

        return redirect()->route('personal.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal= PersonalSponsor::find($id);
        $country= Country::all();
        return view('personel.edit',compact('personal','country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personal =PersonalSponsor::find($id);
        $personal->firstName= $request->firstName;
        $personal->secondName= $request->secondName;
        $personal->thirdName= $request->thirdName;
        $personal->fourthName= $request->fourthName;
        $personal->CountryOfResidence =$request->CountryOfResidence;
        $personal->addressDetails =$request->addressDetails;
        $personal->telephoneNumber =$request->telephoneNumber;




        $personal->save();
        return redirect()->route('personal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $personal=PersonalSponsor::find($id);
        $personal->delete();

        return redirect()->route('personal.index')->with('successMsg',' deleted successfully' );
        $personal->save();
    }
}
