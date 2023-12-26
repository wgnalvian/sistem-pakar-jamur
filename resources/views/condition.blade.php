@extends('layout.default')
@section('content')
<div class="row tw-px-10 tw-box-border">
    <div class="col-12 tw-px-4 mt-7 tw-box-border">
       <h6 class="font-weight-bolder tw-text-4xl  text-white mb-0">{{$title}}</h6> 
    </div>
</div>
    <div class="row mx-2 mt-4 p-0">
    @if(session()->get('user')->name == "Admin")
        <div class="w-full box-border px-3 h-16 rounded-md  flex items-end justify-start align-bottom m-0 p-0">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success btn-sm w-15"> + Tambah
                Kondisi</button>
        </div>
@endif
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body box-border px-4 pt-0 pb-2 mt-4 mb-4">
                    <table class="tw-table-auto tw-w-full ">
                        <thead>
                            <tr style="background-image: linear-gradient( 90.9deg,  rgba(3,195,195,1) 0.3%, rgba(37,84,112,1) 87.8% );" class=" tw-border-b tw-rounded-t-md">
                                <th class=" tw-py-2 tw-text-white tw-border-r tw-w-1/6  tw-box-border tw-px-3">Nomor</th>
                                <th class="tw-w-2/6 tw-text-white  tw-border-r tw-py-2 tw-box-border tw-px-3 ">Kondisi</th>
                                <th class="tw-w-2/6 tw-text-white  tw-border-r tw-box-border tw-px-3">Kode</th>
                                @if(session()->get('user')->name == "Admin")
                                <th></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;?>
                            @foreach ($conditions as $condition)
                                <tr class=" tw-border-b">
                                    <td class="tw-border-r tw-box-border tw-px-3">{{$i}}</td>
                                    <td class="tw-box-border tw-border-r tw-px-3">{{ $condition->code }}</td>
                                    <td class="tw-box-border tw-border-r tw-px-3">{{ $condition->name }}</td>
                                    @if(session()->get('user')->name == "Admin")
                                    <td class="tw-box-border tw-px-3 tw-flex tw-flex-col tw-border-r tw-align-middle tw-items-start tw-justify-start ">

                                        <button data-bs-toggle="modal" data-bs-target="#deleteSymtom{{$condition->id}}"  class="btn btn-warning btn-sm tw-mt-3"> <i
                                                class=" tw-mr-2 fa fa-trash" aria-hidden="true"></i> Hapus </button>
                                        <button data-bs-toggle="modal" data-bs-target="#editSymtom{{$condition->id}}" class="btn btn-danger btn-sm"><i
                                                class="tw-mr-2 fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
                                                
                                    </td>
                                    @endif
                                </tr>
                                {{-- Modal Edit --}}
                                <div class="modal fade" id="editSymtom{{$condition->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <form action="/condition" method="post">
                                          @csrf
                                          @method('patch')
                                          <input type="hidden" name="id" value="{{$condition->id}}">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kondisi</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                  <div class="mb-3">
                                                      <label for="exampleInputEmail1" class="form-label">Nama Kondisi</label>
                                                      <input type="text" class="form-control" name="name" value="{{$condition->name}}">
                          
                                                  </div>
                                                  @error('name')
                                                      <div class="alert alert-danger text-white">{{ $message }}</div>
                                                  @enderror
                                                  <div class="mb-3">
                                                      <label for="exampleInputPassword1" class="form-label">Kode Kondisi</label>
                                                      <input type="text" value="{{$condition->code}}"  class="form-control" name="code">
                                                  </div>
                                                  @error('code')
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
                                <div class="modal" tabindex="-1" id="deleteSymtom{{$condition->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus Kondisi</h5>
                                            
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Apakah kamu yakin ingin menghapus gejala {{$condition->code}} ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                    <form action="/condition" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" name="id" value="{{$condition->id}}">
                                                      <button type="submit" class="btn btn-primary" >Save changes</button>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;?>
                            @endforeach



                        </tbody>
                        @if (count($conditions) == 0)
                            <div class="alert alert-danger text-white">Data Kondisi Kosong</div>      
                        @endif
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/condition" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kondisi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kondisi</label>
                            <input type="text" class="form-control" name="name">

                        </div>
                        @error('name')
                            <div class="alert alert-danger text-white">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kode Kondisi</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        @error('code')
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