
<html lang="ar">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="direction: rtl" class="text-right" ng-app="myApp" >
    <div class="container">
        <div class="container-fluid">
            <div class="row " ng-controller="CRUDController1">
                <br>
                <br>
                    <div class="card " >

                        <div class="card-header card-header-primary">
                            <h4 class="card-title float-right">تعديل بيانات الكفيل </h4>
                        </div>

                        <div class="card-body">
                            <form  method="post"  enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class=" mt-3 " >
                                    <label class="mr-0"> الاسم </label>
                                    <input type="text" class="col-2" name="firstName"
                                           ng-model="personal.firstName">
                                    <input type="text" class="col-2" name="secondName"
                                           ng-model="personal.secondName">
                                    <input type="text" class="col-2" name="thirdName"
                                         ng-model="personal.thirdName">
                                    <input type="text" class="col-2" name="fourthName"
                                            ng-model="personal.fourthName">
                                </div>


                            <div class="col-md-12  mt-3" >
                                <label>الدولة</label>
                                <select  class="col-3 " name="CountryOfResidence"
                                         ng-model="personal.CountryOfResidence">
                                    <option ng-repeat="x in country" value="{{x.id}} ">{{x.name}}</option>

                                </select>
                            </div>

                            <div class="col-md-12  mt-3 ">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">العنوان</label>
                                    <input type="text" class="col-11" name="addressDetails"ng-model="personal.addressDetails"
                                           >
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">الهاتف</label>
                                    <input type="text" class="col-11" name="telephoneNumber" ng-model="personal.telephoneNumber"
                                          >
                                </div>
                            </div>

                                <br>
                             <div class="text-center">
                                    <button type="submit" value="حفظ" ng-click="updatesponsor(personals.id)"
                                           class="m-auto rounded-4 btn btn-md btn-outline-secondary"
                                           style="color:#fa8282" >حفظ</button>
                                    <a href="{{route('personal.index')}}" class="btn btn-outline-secondary  btn-md "
                                       style="color:#fa8282">العودة</a>
                             </div>

                        </form>
                    </div>
                </div>
             </div>
         </div>
    </div>
</body>

