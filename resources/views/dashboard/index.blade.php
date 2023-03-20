
@extends('layout.master')    

@section('title', env("APP_NAME") . " | أهلا")
    
@section('css')
        <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@endsection

@extends('layout.headeruser')


@section('content') 

<section id="main-content" class="d-flex py-4 flex-column justify-content-center align-items-center" style="min-height: calc(100vh - 102px)">

  <img src="/includes/img/barbershop.png" width="108px" height="108px" alt="">

  <h3 class="my-3">زبائن على الكراسى</h3>
  <h3 class="mt-3">{{$Data[0]->Value}}</h3>

  <div class="data-button my-3 d-flex justify-content-between align-items-center w-75">
    <a href="/dashboard/chair/-" class="btn btn-dark w-50 mx-2 d-block fs-3  " style="border-radius: 20px">-</a>
    <a href="/dashboard/chair/+" class="btn btn-dark w-50  d-block fs-4" style="border-radius: 20px">+</a>
  </div>
  
  <div class="dropwdown-divider bg-dark w-75 mx-auto my-3" style="min-height: 3px"></div>
  
  <img src="/includes/img/barber-shop.png"  width="108px" height="108px"  alt="">
  <h3 class="my-3">زبائن فى الإنتظار</h3>
  
  <h3 class="mt-3">{{$Data[1]->Value}}</h3>
  
  
  <div class="data-button my-3 d-flex justify-content-between align-items-center w-75">
    <a href="/dashboard/wait/-" class="btn btn-dark w-50 mx-2 d-block fs-3  " style="border-radius: 20px">-</a>
    <a href="/dashboard/wait/+" class="btn btn-dark w-50  d-block fs-4" style="border-radius: 20px">+</a>
  </div>

  <div class="dropwdown-divider bg-dark w-75 mx-auto my-3" style="min-height: 3px"></div>
  
  <img src="/includes/img/laptop.png"  width="108px" height="108px"  alt="">
  <h3 class="my-3">زبائن حجزت أونلاين</h3>
  <h3 class="my-3">0</h3>

  <a href="" class="btn btn-dark w-75 mx-auto d-block my-2" style="border-radius: 20px">الحجوزات</a>
  @if ($Data[2]->Value == 1)

    <a href="/dashboard/online/{{$Data[2]->Value}}" class="btn btn-danger w-75 mx-auto d-block my-2" style="border-radius: 20px">إلغاء الحجز أونلاين</a>
    
    
    @else
    
    <a href="/dashboard/online/{{$Data[2]->Value}}" class="btn btn-success w-75 mx-auto d-block my-2" style="border-radius: 20px">تفعيل الحجز أونلاين</a>
      
  @endif
  <a href="/home" class="btn btn-dark w-75 mx-auto d-block my-2" style="border-radius: 20px">تسجيل الخروج</a>
</section>

<style>
  .swal2-input {
    height: 2.625em;
    width: 230px;
    margin: 10px 0px;
    padding: 0;
}

.swal2-confirm.swal2-styled{
  background-color: black;
  color: white;
}
</style>
@endsection



