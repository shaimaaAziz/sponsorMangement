
<html lang="ar">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body style="direction: rtl" class="text-right">
<div class="container">
    <div class="container-fluid">
        <div class="row ">
            <br>
            <br>

                <div class="card " >
                    <div class="card-header card-header-primary">
                        <h4 class="card-title float-right">تعديل بيانات الكفيل </h4>

                    </div>
                    <div class="card-body">
                        <form  method="post" action="{{route('personal.update',$personal->id)}}"
                               enctype="multipart/form-data">
                            @csrf
                            @method('put')


                    <div class=" mt-3 " >
                        <label class="mr-0"> الاسم </label>
                        <input type="text" class="col-2" name="firstName" value="{{$personal->firstName}}">
                        <input type="text" class="col-2" name="secondName" value="{{$personal->secondName}}">
                        <input type="text" class="col-2" name="thirdName" value="{{$personal->thirdName}}">
                        <input type="text" class="col-2" name="fourthName" value="{{$personal->fourthName}}" >
                    </div>


                <div class="col-md-12  mt-3" >
                    <label>الدولة</label>
                    <select  class="col-3 " name="CountryOfResidence" value="$country->name">
                        @foreach($country as $countries)
                            <option >{{$countries->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12  mt-3 ">
                    <div class="form-group bmd-label-floating">
                        <label class="control-label">العنوان</label>
                        <input type="text" class="col-11" name="addressDetails"
                               value="{{$personal->addressDetails}}">
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="form-group bmd-label-floating">
                        <label class="control-label">الهاتف</label>
                        <input type="text" class="col-11" name="telephoneNumber"
                               value="{{$personal->telephoneNumber}}">
                    </div>
                </div>

                    <br>
                    <input type="submit" value="حفظ" class="m-auto rounded-4 d-block btn btn-md btn-outline-secondary"
                           style="color:#fa8282" >




            </form>
                    </div>
        </div>
    </div>
</div>

</body>

