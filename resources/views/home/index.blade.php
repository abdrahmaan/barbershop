
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
  
  <div class="dropwdown-divider bg-dark w-75 mx-auto my-3" style="min-height: 3px"></div>
  
  <img src="/includes/img/barber-shop.png"  width="108px" height="108px"  alt="">
  <h3 class="my-3">زبائن فى الإنتظار</h3>
  
  <h3 class="mt-3">{{$Data[1]->Value}}</h3>
  
  <div class="dropwdown-divider bg-dark w-75 mx-auto my-3" style="min-height: 3px"></div>
  
  <img src="/includes/img/laptop.png"  width="108px" height="108px"  alt="">
  <h3 class="my-3">زبائن حجزت أونلاين</h3>
  <h3 class="my-3">0</h3>

  @if ($Data[2]->Value == 1)
      
  <button class="btn btn-dark w-75 mx-auto d-block my-3" style="border-radius: 20px">حجز</button>
  @endif
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




@section('script')
    
  <script>

    let btn = document.querySelectorAll("button.btn");

    btn[0].addEventListener("click",()=>{
      let x = Swal.fire({
        html:
        '<div class="d-flex flex-column justify-content-center align-items-center">' +
        '<img src="/includes/img/logo.png" class="mb-3"  width="108px" height="108px"  alt="">' +
        '<input id="swal-input1" placeholder="إسمك" class="swal2-input text-center">' +
        '<input id="swal-input2" placeholder="رقم التليفون" class="swal2-input text-center">' +
        '</div>',
        focusConfirm: false,
        showCancelButton: true,
        cancelButtonText:'إلغاء',
        confirmButtonText:'حجز',
        preConfirm: () => {
          return [
            document.getElementById('swal-input1').value,
            document.getElementById('swal-input2').value
          ]
      }
    })


x.then(x => console.log(x))

    })


  </script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

@endsection

