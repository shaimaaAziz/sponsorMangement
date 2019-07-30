
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="direction: rtl">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col -md-12" >
                <br>
                <a href="{{route('personal.create')}}" class="btn btn-outline-secondary btn-md float-right mr-5 mt-3">إضافة كفيل</a>
                <a href="{{route('search')}}" class="btn btn-outline-secondary btn-md float-right mr-3 mt-3">البحث عن كفلاء </a>
                <br>
                <br>

                <div class="card m-4">
                    <div class="card-header card-header-primary">

                        <h5 class="card-title float-right">جميع الكفلاء</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " style="width:100%" >
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
                                               class="btn btn-info btn-sm">تعديل</a>


                                            <form id="delete-form-{{ $personels->id }}"
                                                  action="{{ route('personal.destroy',$personels->id) }}"
                                                  style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                        <button type="button" class="btn btn-danger btn-sm "
                                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $personels->id }}').submit();
                                                    }else {
                                                    event.preventDefault();
                                                    }">حذف</button></td>



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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


