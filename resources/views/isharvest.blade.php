@extends('layout.default')

@section('content')
<div class="row tw-px-10 tw-box-border">
    <div class="col-12 tw-px-4 mt-7 tw-box-border">
       <h6 class="font-weight-bolder tw-text-4xl  text-white mb-0">{{$title}}</h6> 
    </div>
</div>
    <div class="row mx-2 mt-4 p-0">
       @if(session()->get('user')->name == "Admin")
        @if (count($conditions) != 0)
        <div class="w-full box-border px-3   rounded-md  flex items-end justify-start align-bottom m-0 p-0">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success btn-sm p-3"> + Tambah
                Kelayakan</button>
        </div>
        @endif
      @endif

        <div class="col-12">
            <div class="card mb-4">
               
                <div class="card-body box-border px-4 pt-0 pb-2 mt-4 mb-4">

                    <table class="tw-table-auto tw-w-full">
                        <thead>
                            <tr style="background-image: linear-gradient( 90.9deg,  rgba(3,195,195,1) 0.3%, rgba(37,84,112,1) 87.8% );" class=" tw-border-b  tw-rounded-t-md">
                                <th class=" tw-text-sm tw-py-2 tw-text-white tw-border-r tw-w-1/6 tw-rounded-tl-md  tw-box-border tw-px-3">Nomor</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-py-2 tw-box-border tw-px-3 ">Kelayakan</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-box-border tw-px-3 ">Kode</th>
                              
                                <th class="tw-text-sm tw-rounded-tr-md"></th>
                            </tr>
                        </thead>
                        @if (count($conditions) != 0)
                        <tbody>
                            <?php $i = 1;?>
                              @foreach ($isHarvests as $isharvest)
                                  <tr class=" tw-border-b">
                                      <td class="tw-text-sm tw-border-r tw-box-border tw-px-3">{{$i}}</td>
                                      <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $isharvest->code }}</td>
                                      <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $isharvest->isharvest }}</td>
                                      <td class="tw-text-sm tw-box-border tw-px-3 tw-flex tw-flex-col tw-border-r tw-align-middle tw-items-start tw-justify-start ">
                                          <a  href="/isharvest/detail/{{$isharvest->id}}" class="btn btn-primary btn-sm tw-mt-3"><i
                                              class="tw-mr-2 fa fa-pencil-square-o" aria-hidden="true"></i>Detail</a>
                                               @if(session()->get('user')->name == "Admin")
                                          <button data-bs-toggle="modal" data-bs-target="#deleteDesease{{$isharvest->id}}"  class="btn btn-warning btn-sm "> <i
                                                  class=" tw-mr-2 fa fa-trash" aria-hidden="true"></i> Hapus </button>
                                          <button data-bs-toggle="modal" data-bs-target="#editDesease{{$isharvest->id}}" class="btn btn-danger btn-sm"><i
                                                  class="tw-mr-2 fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>    
                                                  @endif       
                                      </td>
                                  </tr>
                                  {{-- Modal Edit --}}
                                  <div class="modal fade" id="editDesease{{$isharvest->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="/isharvest" method="post">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" name="id" value="{{$isharvest->id}}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kelayakan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama Kelayakan</label>
                                                        <input type="text" class="form-control" name="name" value="{{$isharvest->isharvest}}">
                            
                                                    </div>
                                                    @error('name')
                                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Kode Kelayakan</label>
                                                        <input type="text" value="{{$isharvest->code}}"  class="form-control" name="code">
                                                    </div>
                                                    @error('code')
                                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Deskripsi Kelayakan</label>
                                                        <input type="text" value="{{$isharvest->description}}"  class="form-control" name="description">
                                                    </div>
                                                    @error('description')
                                                        <div class="alert alert-danger text-white">{{ $message }}</div>
                                                    @enderror
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Per Kelayakan</label>
                                                        <input type="text" value="{{$isharvest->description}}"  class="form-control" name="description">
                                                    </div>
                                                    @error('description')
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
                                  <!-- Modal Hapus -->
                                  <div class="modal" tabindex="-1" id="deleteDesease{{$isharvest->id}}">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title">Hapus Kelayakan</h5>
                                              
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                      aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <p>Apakah kamu yakin ingin menghapus gejala {{$isharvest->code}} ?</p>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary"
                                                      data-bs-dismiss="modal">Close</button>
                                                      <form action="/isharvest" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <input type="hidden" name="id" value="{{$isharvest->id}}">
                                                        <button type="submit" class="btn btn-primary" >Save changes</button>
                                                      </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php $i++;?>
                              @endforeach
  
  
  
                          </tbody>
                       
                            
                        @else
                        <tbody>
                            <tr>
                                <td colspan="4">

                                    <div  class="tw-w-full tw-min-h-44 tw-flex tw-flex-col tw-items-center tw-justify-center">
                                        <img class="tw-w-60 tw-h-50 tw-mt-10 " src="/img/empty.png" alt="">
                                        <p>Silahkan tambahkan gejala terlebih dahulu !</p>
                                        <a href="/symtom" class="btn btn-primary">Tambah Gejala</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endif
                      
                        @if (count($isHarvests) == 0)
                            <div class="alert alert-danger text-white">Data Kelayakan Kosong</div>
                            
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/isharvest" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelayakan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelayakan</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        @error('name')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Deskripsi Kelayakan</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        @error('description')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kode Kelayakan</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        @error('code')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror

                     
                        
                       
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        @error('image')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                        <hr>
                        <p class="tw-text-red-600">Tambahkan gejala pertama dari penyakit. Kamu bisa menambahkan sisanya nanti</p>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gejala Kelayakan</label>
                            <select class="form-select" aria-label="Default select example" name="condition">
                                <option selected>Pilih gejala</option>
                                @foreach ($conditions as $condition)
                                    <option value="{{$condition->id}}">{{$condition->name}}</option>
                                    
                                 @endforeach
                            
                              </select>
                        </div>
                        @error('condition')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">CF Pakar</label>
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