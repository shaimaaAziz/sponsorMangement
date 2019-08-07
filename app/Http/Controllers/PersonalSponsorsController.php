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

//        $personal = DB::table('personal_sponsors')->Paginate(2);
        $personal = PersonalSponsor::all();
        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $neighborhood=Neighborhood::all();
        $nationality=Nationality::all();

        return response()->json([
            'personal' => $personal,
            'country'=>$country,
            'city'=>$city,
            'governorate'=>$governorate,
            'neighborhood'=>$neighborhood,
            'nationality'=>$nationality

        ], 200);
    }


    public function searchGet(){
        $personal=PersonalSponsor::all();
//        $personal = DB::table('personal_sponsors')->Paginate(2);
        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $nationality=Nationality::all();

        return response()->json([
            'personal' => $personal,
            'country'=>$country,
            'city'=>$city,
            'governorate'=>$governorate,
            'nationality'=>$nationality

        ], 200);
    }

    public function searchPost(Request $request){


        $person = new PersonalSponsor();
        if ($request->type === 'شخصي') {

                    if (isset($request->firstName)) {
                        $person = $person->where('firstName', 'LIKE', '%' . $request->firstName . '%')
                            ->where('type', '=', 'شخصي');
                    }
                    if (isset($request->secondName)) {
                        $person = $person->where('secondName', 'LIKE', '%' . $request->secondName . '%')
                            ->where('type', '=', 'شخصي');
                    }
                    if (isset($request->thirdName)) {
                        $person = $person->where('thirdName', 'LIKE', '%' . $request->thirdName . '%')
                            ->where('type', '=', 'شخصي');

                    }
                    if (isset($request->fourthName)) {
                        $person = $person->where('fourthName', 'LIKE', '%' . $request->fourthName . '%')
                            ->where('type', '=', 'شخصي');

                    }
                    if (isset($request->addressDetails)) {
                        $person = $person->where('addressDetails', 'LIKE', '%' . $request->addressDetails . '%')
                        ->where('type', '=', 'شخصي');

                    }
                    if (isset($request->telephoneNumber)) {
                        $person = $person->where('telephoneNumber', 'LIKE', '%' . $request->telephoneNumber . '%')
                        ->where('type', '=', 'شخصي');
                    }
                    if (isset($request->CountryOfResidence)) {
                        $person = $person->where('CountryOfResidence', 'LIKE', '%' . $request->CountryOfResidence . '%')
                        ->where('type', '=', 'شخصي');
                    }

                    $person = $person->get();

                    return response()->json([
                        'personal' => $person,

                    ], 200);

        }

        elseif ($request->type === 'مؤسسي') {

            if(isset($request->firstName)){
                $person = $person->where('firstName', 'LIKE', '%'.$request->firstName.'%')
                    ->where('type', '=', 'مؤسسي');
            }
            if(isset($request->secondName)){
                $person = $person-> where('secondName', 'LIKE', '%'.$request->secondName.'%')
                    ->where('type', '=', 'مؤسسي');

            }if(isset($request->thirdName)){
                $person = $person-> where('thirdName', 'LIKE', '%'.$request->thirdName.'%')
                    ->where('type', '=', 'مؤسسي');

            }if(isset($request->fourthName)){
                $person = $person-> where('fourthName', 'LIKE', '%'.$request->fourthName.'%')
                    ->where('type', '=', 'مؤسسي');

            }if(isset($request->addressDetails)){
                $person = $person->where('addressDetails', 'LIKE', '%'.$request->addressDetails.'%')
                    ->where('type', '=', 'مؤسسي');

            }if(isset($request->telephoneNumber)){
                $person = $person->where('telephoneNumber', 'LIKE', '%'.$request->telephoneNumber.'%')
                    ->where('type', '=', 'مؤسسي');

            }if(isset($request->CountryOfResidence)){
                $person = $person->where('CountryOfResidence', 'LIKE', '%'.$request->CountryOfResidence.'%')
                ->where('type', '=', 'مؤسسي');
            }


            $person = $person->get();
            return response()->json([
                'personal' => $person,

            ], 200);

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
        $personal = PersonalSponsor::all();

        $country= Country::all();
        $city=City::all();
        $governorate=Governorate::all();
        $neighborhood=Neighborhood::all();
        $nationality=Nationality::all();


        return response()->json([
            'personal' => $personal,
            'country'=>$country,
            'city'=>$city,
            'governorate'=>$governorate,
            'neighborhood'=>$neighborhood,
            'nationality'=>$nationality

        ], 200);
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
            $personal->password = $request->password;
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
            $personal->firstName = $request->firstName;
            $personal->secondName = $request->secondName;
            $personal->thirdName = $request->thirdName;
            $personal->fourthName = $request->fourthName;
            $personal->addressDetails = $request->addressDetails;
            $personal->telephoneNumber = $request->telephoneNumber;
            $personal->telephoneNumber2 = $request->telephoneNumber2;
            $personal->ContactPerson = $request->ContactPerson;
            $personal->email = $request->email;
            $personal->CountryOfResidence = $request->CountryOfResidence;
    }

        $personal->save();


        return response()->json([
            'personal' => $personal,

        ], 200);
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
//        return view('personel.edit',compact('personal','country'));

        return response()->json([
            'personal' => $personal,
            'country'=>$country

        ], 200);
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

        $country= Country::all();
        $personal =PersonalSponsor::find($id);
        $personal->firstName= $request->firstName;
        $personal->secondName= $request->secondName;
        $personal->thirdName= $request->thirdName;
        $personal->fourthName= $request->fourthName;
        $personal->CountryOfResidence =$request->CountryOfResidence;
        $personal->addressDetails =$request->addressDetails;
        $personal->telephoneNumber =$request->telephoneNumber;


        $personal->save();

        return response()->json([
            'personal' => $personal,
            'country'=>$country

        ], 200);

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

        return response()->json([
            'personal' => $personal

        ], 200);        $personal->save();
    }
}
