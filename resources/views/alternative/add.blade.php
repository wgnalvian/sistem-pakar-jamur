@extends('layout.default')

@section('content')

@if($errors->any())
    <div class="alert alert-danger tw-text-white">
        <p class="tw-text-white">Silahkan pilih semua gejala </p>
    </div>
@endif

    <div class="row tw-px-10 tw-box-border">
        <div class="col-12 tw-px-4 mt-7 tw-box-border">
            <h6 class="font-weight-bolder tw-text-4xl  text-white mb-0">Pilih Gejala</h6>
        </div>
    </div>


    <form action="/alternative" method="post">
        @csrf
    <div class="row mx-2  mt-5">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header ">
                    <div class="tw-flex  tw-items-center">
                        <i class="fa fa-bookmark tw-text-sm" aria-hidden="true"></i>
                        <p class="tw-text-sm tw-font-bold tw-p-0 tw-m-0 tw-ml-3">Gejala </p>
                    </div>

                </div>
                <div class="card-body box-border px-4 pt-0 pb-2 mb-4 ">
                    <table class="tw-table-auto tw-w-full tw-border">
                        <thead>
                            <tr class=" tw-border-b  tw-bg-blue-400 tw-rounded-t-xl">
                                <th
                                    class=" tw-text-sm tw-py-2 tw-text-white tw-border-r tw-w-1/6 tw-rounded-tl-xl  tw-box-border tw-px-3">
                                    Nomor</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-py-2 tw-box-border tw-px-3 ">
                                    Gejala</th>
                                <th class="tw-text-sm tw-w-2/6 tw-text-white  tw-border-r tw-box-border tw-px-3 ">Kode</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 1;
                            ?>
                            @foreach ($symtoms as $symtom)
                                <tr class=" tw-border-b">
                                    <td class=" tw-border-r tw-text-sm tw-box-border tw-px-3">{{$i}}</td>
                                    <td class="tw-text-sm tw-box-border tw-border-r tw-px-3">{{ $symtom->name }}</td>
                                    <td class="tw-text-sm tw-box-border tw-border-r tw-px-3 py-2">
                                        <select name="{{ $symtom->id }}" class="form-select"
                                            aria-label="Default select example">
                                            <option selected>Pilih Kondisi</option>
                                            <option value="0">Tidak</option>
                                            <option value="0.2">Tidak Tau</option>
                                            <option value="0.4">Mungkin</option>
                                            <option value="0.6">Kemungkinan Besar</option>
                                            <option value="0.8">Hampir Pasti</option>
                                            <option value="1">Pasti</option>
                                        </select>
                                    </td>

                                </tr>
                                <?php $i++ ?>
                            @endforeach






                        </tbody>

                    </table>
                </div>


            </div>
        </div>
        <div class="flex">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection
