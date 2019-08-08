<html>

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <script src="../dirPagination.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="direction: rtl" ng-app="myApp"  >

    <div class="container" ng-controller="CRUDController as data" >
        <div class="container-fluid">
            <div class="row">
                <div class="col -md-12" >
                <br>
                <a href="#!/create" class="btn btn-outline-secondary btn-md float-right mr-5 mt-3">إضافة كفيل</a>
                <a href=""  class="btn btn-outline-secondary btn-md float-right mr-3 mt-3" id="searchbutton">البحث عن كفلاء </a>
                <br>
                <br>

                <div id="search">
                    <h5 class="text-center" style="color: #fa8282">البحث عن كفلاء </h5>
                    <form  method="post" style="text-align:right">


                    <div style="width:55em">
                        <fieldset  class="border p-2 m-1" >
                            <legend  class="w-auto " style="color:#fa8282;font-weight:bold;">محددات البحث </legend>

                            <div class="text-center ">
                                <input type="radio" id="personel1" name="sponsor" ng-model="personal.type" value="شخصي" class="mr-3" >شخصي
                                <input type="radio" id="institutoin1" name="sponsor" ng-model="personal.type" value="مؤسسي" class="mr-3">مؤسسي
                            </div>

                            <div class="col-md-12 mt-3 " >
                                <label class="mr-3"> الاسم </label>
                                <input type="text" name="firstName" ng-model="personal.firstName">
                                <input type="text" name="secondName" ng-model="personal.secondName">
                                <input type="text" name="thirdName" ng-model="personal.thirdName">
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
                                    <option ng-repeat="(index , countries) in country">
                                        {{countries.name}}</option>

                                </select>
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
                                    <label class="control-label">رقم بطاقة التعريف </label>
                                    <input type="text" class="col-10" name="identificationNumber"
                                           ng-model="personal.identificationNumber">
                                </div>
                            </div>


                        </fieldset>
                    </div>
                    <div class="text-center">
                        <button type="submit" value="حفظ" ng-click="search()" class="m-auto rounded-4 d-inline btn btn-md btn-outline-secondary"
                                style="color:#fa8282" >حفظ</button>
                    </div>


                </form>
                </div>
                <fieldset  style="width: 55em" class="border p-3 m-3 ">
                        <legend  class="w-auto " style="color:#fa8282;font-weight:bold; text-align: right">نتائج البحث </legend>
                        <div class="table-responsive" >
                            <table class="table table-bordered " >
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th ng-click="sort('firstName')">الإسم</th>
                                    <th ng-click="sort('type')" >النوع</th>
                                    <th>الدولة</th>
                                    <th>العنوان</th>
                                    <th>رقم الهاتف</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr  dir-paginate ="(index , personals) in personal |itemsPerPage:data.itemsPerPage "
                                >
                                    <td>{{ index + 1 }}</td>

                                    <td>{{personals.firstName }}{{personals.secondName }}
                                        {{personals.thirdName }}{{personals.fourthName }}
                                    </td>
                                    <td>{{personals.type }}</td>

                                    <td {{personals.CountryOfResidence}} >فلسطين</td>
                                    <td>{{personals.addressDetails }}</td>
                                    <td>{{personals.telephoneNumber }}</td>

                                    <td>
                                        <a href="#!personal/{{personals.id}}"
                                           class="btn btn-info btn-sm">edit</a>

                                        <button type="submit" class="btn btn-danger btn-sm del"
                                                ng-click="confirmDelete(personals.id)">delete</button></td>



                                </tr>

                                </tbody>

                            </table>

                            <dir-pagination-controls
                                    max-size="2"
                                    direction-links="true"
                                    boundary-links="true"
                                    on-page-change="data.getData(newPageNumber)" >
                            </dir-pagination-controls>

                        </div>
                    </fieldset>

            </div>

            </div>
            </div>
        </div>


<script>
    $(document).ready(function() {

        $("#search").hide();

        $('#searchbutton').click(function ( ) {
            $("#search").show();
        })
    });



</script>






</body>




</html>