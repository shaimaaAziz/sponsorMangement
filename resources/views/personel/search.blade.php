<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="direction: rtl" >

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <h5 class="text-center" style="color: #fa8282">البحث عن كفلاء </h5>
                <form action="{{route('search')}}" method="post" style="text-align:right">
                    @csrf
                    <div style="width:55em">
                        <fieldset  class="border p-2 m-1" >
                            <legend  class="w-auto " style="color:#fa8282;font-weight:bold;">محددات البحث </legend>

                            <div class="text-center ">
                                <input type="radio" id="personel1" name="sponsor" value="شخصي" class="mr-3" >شخصي
                                <input type="radio" id="institutoin1" name="sponsor" value="مؤسسي" class="mr-3">مؤسسي
                            </div>

                            <div class="col-md-12 mt-3 " >
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
                            </div>

                            <div class="col-md-12  mt-3 ">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">مسؤول الاتصال</label>
                                    <input type="text" class="col-10" name="ContactPerson">
                                </div>
                            </div>

                            <div class="col-md-12  mt-3 ">
                                <div class="form-group bmd-label-floating">
                                    <label class="control-label">رقم بطاقة التعريف </label>
                                    <input type="text" class="col-10" name="identificationNumber">
                                </div>
                            </div>


                        </fieldset>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="حفظ" class="m-auto rounded-4 d-inline btn btn-md btn-outline-secondary"
                               style="color:#fa8282" >

                        <a href="{{route('personal.index')}}" class="btn btn-outline-secondary  btn-md "
                           style="color:#fa8282">العودة </a>
                    </div>

                </form>

                    <fieldset  class="border p-3 m-3"  >
                        <legend  class="w-auto " style="color:#fa8282;font-weight:bold; text-align: right">نتائج البحث </legend>
                        <div class="table-responsive" >
                            <table class="table table-bordered " >
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>الإسم</th>
                                    <th>النوع</th>
                                    <th>الدولة</th>
                                    <th>العنوان</th>
                                    <th>رقم الهاتف</th>

                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($personel as $key=>$personels)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>

                                        <td>{{$personels->firstName }}{{$personels->secondName }}
                                            {{$personels->thirdName }}{{$personels->fourthName }}
                                        </td>
                                        <td>{{$personels->type }}</td>
                                        <td>{{$personels->CountryOfResidence }}</td>
                                        <td>{{$personels->addressDetails }}</td>
                                        <td>{{$personels->telephoneNumber }}</td>


                                        <td> <a href=" {{route('personal.edit',$personels->id)}}"
                                                class="btn btn-info btn-sm">تعديل</a></td>


                                    </tr>
                                @endforeach
                                </tbody>

                            </table>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination ">
                                    <li class="page-item"><a class="page-link" href="{{$personel->url(1)}}">الأول</a></li>
                                    <li class="page-item"><a class="page-link" href="{{$personel->previousPageUrl()}}">السابق</a></li>
                                    <li class="page-item"><a class="page-link" href="{{ $personel->nextPageUrl() }}">التالي</a></li>
                                    <li class="page-item"><a class="page-link" href="{{$personel->url($personel->lastPage())}}">الأخير</a></li>
                                </ul>
                            </nav>


                        </div>
                    </fieldset>

            </div>

            </div>
        </div>
    </div>









</body>




</html>