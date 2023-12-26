@extends('layout.default')

@section('content')

<div class="row tw-px-10 tw-box-border " style="margin-top: -80px">
    <div class="col-12 tw-px-4 mt-8 tw-box-border">
       <h6 class="font-weight-bolder tw-text-4xl mb-5 text-white mb-0">Sistem Cerdas Informasi Perawatan , Diagnosis Penyakit, dan Kelayakan Panen Jamur Tiram</h6>
    </div>
</div>
<div class="row tw-px-10 tw-box-border">
    <div class="col-12 tw-px-4  tw-box-border ">
    <div class="btn btn-danger">
     <h6 class="font-weight-bolder tw-text-xl tw-text-white " >Silahkan pilih menu dibawah :</h6> 
    </div>
      
    </div>
</div>
<div class="row tw-px-10 mt-5 " >
    <div class="col-md-4 col-sm-12 mb-2" >
        <a href="{{ url('/care-mushroom') }}" class="card py-5 tw-bg-transparent" style="background-image: url('/img/bibit.png');
        background-size: cover; ">
            <div   class="card-body tw-flex tw-justify-center tw-bg-transparent tw-text-white">
                <p class="h4 text-white tw-text-9xl">
                    <strong>Perawatan Jamur Tiram</strong>
                </p>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-12 mb-2">
         <a href="{{ url('/alternative/isharvest/add') }}" class="card py-5"style="background-image: url('/img/panen.jpeg');
        background-size: cover; ">
            <div class="card-body tw-flex tw-justify-center">
                <p class="h4 text-white tw-text-9xl">
                    <strong>Cek Jamur Layak Panen</strong>
                </p>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-12  mb-2">
          <a href="{{ url('/alternative/add') }}" class="card py-5 tw-bg-transparent" style="background-image: url('/img/hama.jpg');
        background-size: cover; ">
            <div   class="card-body tw-flex tw-justify-center tw-bg-transparent tw-text-white">
                <p class="h4 text-white tw-text-9xl">
                    <strong>Cek Penyakit Jamur Tiram</strong>
                </p>
            </div>
        </a>
    </div>
  
</div>

 
@endsection
