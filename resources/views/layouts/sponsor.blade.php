<!DOCTYPE html>
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
         <div class="row" style="text-align:right">
             <br>
             <br>
             <a href="" style="color:#fa8282 ; font-weight: bold " class="m-auto d-block">اضافة كفيل </a>

           <div>
               <fieldset  class="border p-2">
                   <legend  class="w-auto " style="color:#fa8282;font-weight:bold;">بيانات الكفيل </legend>
                        <br>
                   <form style="text-align:right">
                       <div class="text-center ">
                            <input type="radio" id="sponsor " name="sponsor" value="شخصي" class="mr-3" checked>شخصي
                            <input type="radio" id="sponsor " name="sponsor" value="مؤسسي" class="mr-3">مؤسسي
                       </div>
                       @yield('content')
                       {{--@if(form::radio('sponsor', 'شخصي'))--}}
                         {{--@yield('content')--}}
                       {{--@elseif(form::radio('sponsor','مؤسسي'))--}}
                           {{--@yield('content1')--}}
                       {{--@endif--}}
                   </form>
               </fieldset>
                 <br>
                 <button type="submit" class="m-auto d-block btn btn-md btn-outline-secondary"
                         style="color:#fa8282" >  حفظ  </button>
                 <br>

             </div>
         </div>
     </div>
 </div>
<script>

    // $(document).on('click', '#sponsor', function () {
    //     if($(this).val()=== 'شخصي') {
    //         alert('Web is selected');
    //
    //     }
    //     console.log('clicked!');
    // });

</script>
</body>

</html>
