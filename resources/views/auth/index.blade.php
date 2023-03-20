
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

<section id="main-content" class="row d-flex py-4 flex-column justify-content-center align-items-center" style="min-height: calc(100vh - 102px)">

    <div class="data-text my-3 col-10 d-flex flex-column align-items-end">
        <h4 class="text-dark fs-5 mb-2">إسم المستخدم</h4>
        <input type="text" class="form-control text-center" placeholder="إسم المستخدم" style="border-radius: 20px">
    </div>
    <div class="data-text my-2 mb-3 col-10 d-flex flex-column align-items-end">
        <h4 class="text-dark fs-5 mb-2">كلمة السر</h4>
        <input type="password" class="form-control text-center" placeholder="كلمة السر" style="border-radius: 20px">
    </div>

  <a href="/dashboard" class="btn btn-dark w-75 mx-auto d-block my-2" style="border-radius: 20px">تسجيل دخول</a>
  <a href="/home" class="btn btn-danger w-75 mx-auto d-block my-2" style="border-radius: 20px">رجوع</a>
</section>


@endsection




@section('script')
    


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

@endsection

