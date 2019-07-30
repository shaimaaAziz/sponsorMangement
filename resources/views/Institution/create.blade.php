
@extends('layouts.sponsor')



@section('content1')
    <div class="content"  style="direction: rtl">
        <div class="container-fluid float-left" >
            <div class="row">
            <form>

                 <div class="col-md-12  mt-3" >
                    <label>الدولة</label>
                    <select  class="col-3 " name="Country" >
                        @foreach($country as $countries)
                            <option >{{$countries->name}}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-12 ">
                    <div class="form-group bmd-label-floating">
                        <label class="control-label">الاسم</label>
                        <input type="text" class="col-11" name="name">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="form-group bmd-label-floating">
                        <label class="control-label">مسؤول الاتصال</label>
                        <input type="text" class="col-10" name="ContactPerson">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="form-group bmd-label-floating">
                        <label class="control-label">العنوان</label>
                        <input type="text" class="col-11" name="address">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <div class="form-group bmd-label-floating">
                        <label >الهاتف1</label>
                        <input type="text" class="col-5" name="telephoneNumber1" class="ml-3">
                        <label >الهاتف2</label>
                        <input type="text" class="col-5" name="telephoneNumber2">
                    </div>
                </div>

                <div class="col-md-12 ">
                    <label class="control-label">البريد</label>
                    <input class="col-11" type="email" name="email">

                </div>
            </form>
            </div>
        </div>
    </div>

@endsection


