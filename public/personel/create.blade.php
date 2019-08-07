
<html lang="ar">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="direction: rtl" ng-app="myApp" ng-controller="CRUDController1">
    <div class="container">
        <div class="container-fluid">
             <div class="row" >
                 <form method="post" style="text-align:right">

                     <br>

                    <a href="" style="color:#fa8282 ; font-weight: bold ; text-align: center" class=" d-block">اضافة كفيل </a>
                    <div>
                        <fieldset  class="border p-2 " >
                         <legend  class="w-auto " style="color:#fa8282;font-weight:bold;">بيانات الكفيل </legend>
                            <br>
                            <div class="text-center ">
                                <input type="radio" id="personel1" name="type" ng-model="personal.type" value="شخصي" class="mr-3" >شخصي
                                <input type="radio" id="institutoin1" name="type" ng-model="personal.type" value="مؤسسي" class="mr-3">مؤسسي
                            </div>


                        <div id="personel">

                            <div class="col-md-12 mt-3">
                                <label class="ml-3"> بطاقة التعريف </label>
                                <input  class="ml-2" type="radio" name="definitionType" ng-model="personal.definitionType">هوية
                                <input class="ml-2" type="radio" name="definitionType" ng-model="personal.definitionType">جوازالسفر


                                <label class="mr-5"> رقم بطاقة التعريف</label>
                                <input type="number" name="identificationNumber" ng-model="personal.identificationNumber">
                            </div>

                            <div class=" mt-3 " >
                                <label class="mr-3"> الاسم </label>
                                <input type="text" name="firstName" ng-model="personal.firstName">
                                <input type="text" name="secondName" ng-model="personal.secondName">
                                <input type="text" name="thirdName"  ng-model="personal.thirdName">
                                <input type="text" name="fourthName" ng-model="personal.fourthName" >
                            </div>

                            <div class="col-md-12 mt-3" >
                                <label>المحافظة</label>
                                <select  class="col-3 " name="governorate" ng-model="personal.governorate">
                                    <option ng-repeat="(index , governorates) in governorate">
                                            {{governorates.name}}</option>

                                </select>

                                <label>المدينة</label>
                                <select class="col-3 "  name="city" ng-model="personal.city">

                                    <option ng-repeat="(index , citits) in city">{{citits.name}}</option>

                                </select>

                                <label>الحي</label>
                                <select class="col-3 "  name="neighborhood" ng-model="personal.neighborhood">
                                        <option ng-repeat="(index , neighborhoods) in neighborhood"
                                                value="" >{{neighborhoods.name}}</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group bmd-label-floating">
                                    تفاصيل العنوان
                                    <input type="text" class="col-10" name="addressDetails" ng-model="personal.addressDetails">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label>الهاتف</label>
                                <input class="col-3 " type="number" name="telephoneNumber" ng-model="personal.telephoneNumber">


                                <label>الجوال</label>
                                <input class="col-3 " type="number"  name="mobileNumber" ng-model="personal.mobileNumber" >


                                <label>البريد</label>
                                <input class="col-3 " type="email" name="email" ng-model="personal.email">

                            </div>

                            <div class="col-md-12 mt-3">
                                <label>الجنسية</label>
                                <select  class="col-3 "  name="nationality"  ng-model="personal.nationality">

                                        <option ng-repeat="(index , nationalities) in nationality"
                                                value="" >{{nationalities.name}}</option>

                                </select>

                                <label>دولة الاقامة</label>
                                <select class="col-3 "  name="CountryOfResidence"
                                        ng-model="personal.CountryOfResidence" >
                                    <option ng-repeat="(index , countries) in country" value="{{countries.id}}">
                                        {{countries.name}}</option>

                                </select>

                                <div class="col-3 mt-3">
                                    <label class="control-label">كلمة المرور</label>
                                    <input class="col-11" type="password" name="password"
                                           ng-model="personal.password">

                                </div>
                            </div>

                        </div>

                        <div id="institution" style="width:50em">

                                <div class="col-md-12  mt-3" >
                                    <label>الدولة</label>
                                    <select  class="col-3 " name="CountryOfResidence"
                                             ng-model="personal.CountryOfResidence">
                                        <option ng-repeat="(index , countries) in country" value="{{countries.id}}">
                                            {{countries.name}}</option>

                                    </select>

                                </div>

                            <div class=" mt-3 " >
                                <label class="mr-3"> الاسم </label>
                                <input type="text" name="firstName" ng-model="personal.firstName">
                                <input type="text" name="secondName" ng-model="personal.secondName">
                                <input type="text" name="thirdName" ng-model="personal.thirdName">
                                <input type="text" name="fourthName" ng-model="personal.fourthName" >
                            </div>

                                <div class="col-md-12  mt-3 ">
                                    <div class="form-group bmd-label-floating">
                                        <label class="control-label">مسؤول الاتصال</label>
                                        <input type="text" class="col-10" name="ContactPerson"
                                               ng-model="personal.ContactPerson">
                                    </div>
                                </div>

                                <div class="col-md-12  mt-3 ">
                                    <div class="form-group bmd-label-floating">
                                        <label class="control-label">العنوان</label>
                                        <input type="text" class="col-11" name="addressDetails"
                                               ng-model="personal.addressDetails">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="form-group bmd-label-floating">
                                        <label >الهاتف1</label>
                                        <input type="number" class="col-5" name="telephoneNumber"
                                               ng-model="personal.telephoneNumber" class="ml-3">
                                        <label >الهاتف2</label>
                                        <input type="number" class="col-5" name="telephoneNumber2"
                                               ng-model="personal.telephoneNumber2">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label class="control-label">البريد</label>
                                    <input class="col-11" type="email" name="email"
                                           ng-model="personal.email">

                                </div>

                                <div class="col-md-12 mt-3">
                                    <label class="control-label">كلمة المرور</label>
                                    <input class="col-11" type="password" name="password"
                                           ng-model="personal.password">

                                </div>

                        </div>


                         </fieldset>
                        <br>
                        <div class="text-center">


                            <button type="submit" class="btn btn-primary" value="حفظ"
                                    ng-click="addsponsor()">حفظ</button>

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

