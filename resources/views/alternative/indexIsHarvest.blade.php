@extends('layout.default')

@section('content')

<div class="row tw-px-10 tw-box-border">
    <div class="col-12 tw-px-4 mt-7 tw-box-border">
        <h6 class="font-weight-bolder tw-text-4xl  text-white mb-0">Hasil Perhitungan</h6>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3>User</h3>
        </div>
        
        <div class="card-body pt-2 pb-5 ">
            <p>Nama : {{session()->get('user')->name}}</p> 
            <p>Email : {{session()->get('user')->email}}</p>
        </div>
        </div>
        
    </div>
</div>
<div class="row mt-5">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <p>Apakah Jamur Layak Panen ?</p>
            </div>
            <div class="card-body pt-2 pb-5 ">
                <div class="tw-h-full tw-w-full tw-flex tw-justify-center tw-text-2xl tw-font-bold">
                    {{$isharvest->isharvest}} <p>      </p><p class="tw-text-2xl tw-text-red-500 tw-font-bold"> ( {{$result}} % ) </p>
                </div>
            </div>
        </div>
    </div>
  
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Gambar
            </div>
            <div class="card-body  tw-flex tw-justify-center">
                <img src="/images/{{$isharvest->image}}" alt="" srcset="" class="tw-w-40 tw-h-40">
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Deskripsi Umum
            </div>
            <div class="card-body pb-5">
              <p>{{$isharvest->description}}</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Gejala
            </div>
            <div class="card-body pb-5">
                <ul class="list-group">
                    @foreach ($isharvest->condition as $condition)
                    <li class="list-group-item">{{$condition->name}}</li>
                   
                    @endforeach
                   
                  </ul>
            </div>
        </div>
    </div>
</div>

@endsection