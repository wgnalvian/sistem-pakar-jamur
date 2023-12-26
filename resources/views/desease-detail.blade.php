@extends('layout.default')
@section('content')
    <div class="row tw-px-10 tw-box-border">
        <div class="col-12 tw-px-4 mt-7 tw-box-border">
           <h6 class="font-weight-bolder tw-text-4xl  text-white mb-0">{{$title}}</h6> -->
        </div>
    </div>
    <div class="row mx-2 mt-2   p-0">
        <div class="col-12 ">
            <div class="card mb-4">
                <div class="card-header ">
                    <div class="tw-flex  tw-items-center tw-pb-4 tw-border-b">
                        <i class="fa fa-bookmark tw-text-sm"  aria-hidden="true"></i>
                        <p class="tw-text-sm  tw-font-bold tw-p-0 tw-m-0 tw-ml-3">Penyakit </p>  
                    </div>
                </div>
                <div class="card-body p-0 px-4 pb-2 row" >
                    <div class="col-1">
                        <img src="/images/{{$deseaseSymtoms[0]->desease->image}}" alt="" class="tw-w-20 tw-h-20">
                    </div>
                    <div class="col-10 tw-flex tw-flex-col tw-items-start tw-justify-start tw-align-top  ">
                        <div class="tw-flex tw-text-sm">
                            <p class=" tw-font-bold">Name</p>
                            <p class=" tw-font-bold tw-ml-4 tw-mr-3">:</p>
                            <p class="tw-text-green-500 tw-font-bold">{{$deseaseSymtoms[0]->desease->desease}}</p>
                        </div>
                        <div class="tw-flex">
                            <p class=" tw-font-bold">Kode</p>
                            <p class=" tw-font-bold tw-ml-6 tw-mr-3">:</p>
                            <p class="tw-text-green-500 tw-font-bold">{{$deseaseSymtoms[0]->desease->code}}</p>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>      
    </div>

    <div class="row mx-3">
        <div class="card">
            <div class="card-header ">
                <div class="tw-flex  tw-items-center tw-pb-4 tw-border-b">
                    <i class="fa fa-bookmark tw-text-sm"  aria-hidden="true"></i>
                    <p class="tw-text-sm  tw-font-bold tw-p-0 tw-m-0 tw-ml-3">Deskripsi </p>  
                </div>
            </div>
            <div class="card-body">
                <p>{{$deseaseSymtoms[0]->desease->description}}</p>
            </div>
        </div>
       
    </div>
    <div class="row mx-3 mt-3">
        <div class="card">
            <div class="card-header ">
                <div class="tw-flex  tw-items-center tw-pb-4 tw-border-b">
                    <i class="fa fa-bookmark tw-text-sm"  aria-hidden="true"></i>
                    <p class="tw-text-sm  tw-font-bold tw-p-0 tw-m-0 tw-ml-3">Perawatan </p>  
                </div>
            </div>
            <div class="card-body">
                <p>{{$deseaseSymtoms[0]->desease->treatment}}</p>
            </div>
        </div>
       
    </div>
  
    <div class="row mx-2 mt-4">
       @if(session()->get('user')->name == "Admin")
        <div class="w-full box-border px-3 h-16 rounded-md  flex items-end justify-start align-bottom m-0 p-0">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success btn-sm w-15"> + Tambah
                Gejala</button>
        </div>
    @endif
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header ">
                    <div class="tw-flex  tw-items-center">
                        <i class="fa fa-bookmark tw-text-sm" aria-hidden="true"></i>
                        <p class="tw-text-sm tw-font-bold tw-p-0 tw-m-0 tw-ml-3">Gejala </p>  
                    </div>
                   
                </div>
                <div class="card-body box-border px-4 pt-0 pb-2 mb-4">
                    <table class="tw-table-auto tw-w-full tw-border">
                        <thead>
                            <tr class=" tw-border-b  tw-bg-blue-400 tw-rounded-t-xl">
                                <th class=" tw-text-sm tw-py-2 tw-text-white tw-border-r tw-w-1/6 tw-rounded-tl-xl  tw-box-border tw-px-3">Nomor</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-py-2 tw-box-border tw-px-3 ">Gejala</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-box-border tw-px-3 ">Kode</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-box-border tw-px-3 ">CF</th>
                                <th class="tw-text-sm tw-rounded-tr-xl"></th>
                            </tr>   
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                            @foreach ($deseaseSymtoms as $deseaseSymtom)
                           
                                <tr class=" tw-border-b">
                                    <td class=" tw-border-r tw-text-sm tw-box-border tw-px-3">{{$i}}</td>
                                    <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $deseaseSymtom->symtom->name }}</td>
                                    <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $deseaseSymtom->symtom->code }}</td>
                                    <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $deseaseSymtom->cf }}</td>
                                    <td class="tw-text-sm tw-box-border tw-px-3 tw-flex tw-flex-col tw-border-r tw-align-middle tw-items-start tw-justify-start ">
                                      @if(session()->get('user')->name == "Admin")
                                        <button data-bs-toggle="modal" data-bs-target="#deleteDesease{{$deseaseSymtom->id}}"  class="btn btn-warning btn-sm tw-mt-3"> <i
                                                class=" tw-mr-2 fa fa-trash" aria-hidden="true"></i> Hapus </button>
                                     
                                            @endif
                                                
                                    </td>
                                </tr>
                              
                                <!-- Modal Hapus -->
                                <div class="modal" tabindex="-1" id="deleteDesease{{$deseaseSymtom->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Penyakit</h5>
                                            
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Apakah kamu yakin ingin menghapus gejala {{$deseaseSymtom->symtom->code}} ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                    <form action="/desease/detail" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{$deseaseSymtom->id}}">
                                                      <button type="submit" class="btn btn-primary" >Save changes</button>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;?>
                            @endforeach



                        </tbody>
                        @if (count($deseaseSymtoms) == 0)
                            <div class="alert alert-danger text-white">Data Penyakit Kosong</div>
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/desease/detail" method="post">
                @csrf
                <input type="hidden" name="desease_id" value="{{$deseaseSymtoms[0]->desease->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Penyakit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gejala</label>
                            <select class="form-select" aria-label="Default select example" name="symtom_id">
                                <option selected>Pilih gejala</option>
                             @foreach ($symtoms as $symtom)
                             <?php $isExist = false; ?>
                                @foreach ($deseaseSymtoms as $deseaseSymtom)
                                    @if ($symtom->id == $deseaseSymtom->symtom->id)
                                        <?php $isExist = true; ?>
                                    @endif
                                @endforeach
                                 @if ($isExist == false)
                                     
                                 <option value="{{$symtom->id}}">{{$symtom->name}}</option>
                                 @endif
                          
                             @endforeach
                              </select>
                              @error('symtom_id')
                              <div class="alert alert-danger text-white">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">CF Pakar</label>
                            <input type="text" class="form-control" name="cf">

                        </div>
                        @error('cf')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
