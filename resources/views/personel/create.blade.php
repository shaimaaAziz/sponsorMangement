
<html lang="ar">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="direction: rtl">
    <div class="container">
        <div class="container-fluid">
             <div class="row" >
                 <form action="{{route('personal.store')}}" method="post" style="text-align:right">
                     @csrf
                     <br>

                    <a href="" style="color:#fa8282 ; font-weight: bold ; text-align: center" class=" d-block">اضافة كفيل </a>
                    <div>
                        <fieldset  class="border p-2 " >
                         <legend  class="w-auto " style="color:#fa8282;font-weight:bold;">بيانات الكفيل </legend>
                            <br>
                            <div class="text-center ">
                                <input type="radio" id="personel1" name="type" value="شخصي" class="mr-3" >شخصي
                                <input type="radio" id="institutoin1" name="type" value="مؤسسي" class="mr-3">مؤسسي
                            </div>


                        <div id="personel">

                            <div class="col-md-12 mt-3">
                                <label class="ml-3"> بطاقة التعريف </label>
                                <input  class="ml-2" type="radio" name="definitionType">هوية
                                <input class="ml-2" type="radio" name="definitionType">جوازالسفر


                                <label class="mr-5"> رقم بطاقة التعريف</label>
                                <input type="number" name="identificationNumber" >
                            </div>

                            <div class=" mt-3 " >
                                <label class="mr-3"> الاسم </label>
                                <input type="text" name="firstName">
                                <input type="text" name="secondName">
                                <input type="text" name="thirdName" >
                                <input type="text" name="fourthName"  >
                            </div>

                            <div class="col-md-12 mt-3" >
                                <label>المحافظة</label>
                                <select  class="col-3 " name="governorate" >
                                    @foreach($governorate as $governorates)
                                        <option >{{$governorates->name}}</option>
                                    @endforeach
                                </select>

                                <label>المدينة</label>
                                <select class="col-3 "  name="city" >
                                    @foreach($city as $citits)
                                        <option >{{$citits->name}}</option>
                                    @endforeach
                                </select>

                                <label>الحي</label>
                                <select class="col-3 "  name="neighborhood" >
                                    @foreach($neighborhood as $neighborhoods)
                                        <option value="" >{{$neighborhoods->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group bmd-label-floating">
                                    تفاصيل العنوان
                                    <input type="text" class="col-10" name="addressDetails">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label>الهاتف</label>
                                <input class="col-3 " type="number" name="telephoneNumber" >


                                <label>الجوال</label>
                                <input class="col-3 " type="text"  name="mobileNumber" >


                                <label>البريد</label>
                                <input class="col-3 " type="email" name="email">

                            </div>

                            <div class="col-md-12 mt-3">
                                <label>الجنسية</label>
                                <select  class="col-3 "  name="nationality" >
                                    @foreach($nationality as $nationalities)
                                        <option value="" >{{$nationalities->name}}</option>
                                    @endforeach
                                </select>

                                <label>دولة الاقامة</label>
                                <select class="col-3 "  name="CountryOfResidence" >
                                    @foreach($country as $countries)
                                        <option >{{$countries->name}}</option>
                                    @endforeach

                                </select>

                                <div class="col-3 mt-3">
                                    <label class="control-label">كلمة المرور</label>
                                    <input class="col-11" type="password" name="password1">

                                </div>
                            </div>

                        </div>

                            {{--********************************--}}
                        <div id="institution" style="width:50em">

                                <div class="col-md-12  mt-3" >
                                    <label>الدولة</label>
                                    <select  class="col-3 " name="CountryOfResidence1" >
                                        @foreach($country as $countries)
                                            <option >{{$countries->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            <div class=" mt-3 " >
                                <label class="mr-3"> الاسم </label>
                                <input type="text" name="firstName1">
                                <input type="text" name="secondName1">
                                <input type="text" name="thirdName1" >
                                <input type="text" name="fourthName1"  >
                            </div>

                                <div class="col-md-12  mt-3 ">
                                    <div class="form-group bmd-label-floating">
                                        <label class="control-label">مسؤول الاتصال</label>
                                        <input type="text" class="col-10" name="ContactPerson">
                                    </div>
                                </div>

                                <div class="col-md-12  mt-3 ">
                                    <div class="form-group bmd-label-floating">
                                        <label class="control-label">العنوان</label>
                                        <input type="text" class="col-11" name="addressDetails1">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="form-group bmd-label-floating">
                                        <label >الهاتف1</label>
                                        <input type="text" class="col-5" name="telephoneNumber1" class="ml-3">
                                        <label >الهاتف2</label>
                                        <input type="text" class="col-5" name="telephoneNumber2">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label class="control-label">البريد</label>
                                    <input class="col-11" type="email" name="email1">

                                </div>

                                <div class="col-md-12 mt-3">
                                    <label class="control-label">كلمة المرور</label>
                                    <input class="col-11" type="password" name="password">

                                </div>

                        </div>


                         </fieldset>
                        <br>
                        <div class="text-center">
                            <input type="submit" value="حفظ" class="m-auto rounded-4 btn btn-md btn-outline-secondary"
                                         style="color:#fa8282" >

                            <a href="{{route('personal.index')}}" class="btn btn-outline-secondary  btn-md "
                               style="color:#fa8282">العودة
                               </a>

                        </div>

                    </div>
                 </form>
              </div>
        </div>
    </div>
    <script>

    $(document).ready(function() {

        $("#institution").hide();

        $('#personel1').click(function() {
            $("#institution").hide();
            $("#personel").show();

        });
        $('#institutoin1').click(function() {
            $("#personel").hide();
            $("#institution").show();
        });
    })
    </script>
</body>

