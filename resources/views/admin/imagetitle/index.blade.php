@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                @if (count($imagetitle))
                    <table class="table table-hover table-bordered dataTable">
                        <thead class="bg-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Image Title</th>
                                <th>Nama Title</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imagetitle as $item)
                                <tr>
                                    <th class="text-center width-table" scope="row">{{ $no++ }}</th>
                                    <td class="text-center">
                                        @if (Storage::exists($item->imagetitle))
                                            <img src="{{ asset('storage/' . $item->imagetitle) }}"
                                                class="img-fluid rounded-start border border-4" alt="gambar imagetitle"
                                                style="height: 125px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"
                                                class="img-fluid rounded-start border border-4" alt="tidak ada gambar"
                                                style="height: 125px; object-fit: contain;">
                                        @endif
                                    </td>
                                    <td>{{ $item->nama_title }}</td>
                                    <td class="width-table">
                                        <a href="{{ url('admin/image_title/' . Crypt::encryptString($item->id_imagetitle ) . '/edit') }}" class="btn btn-outline-success mx-1">
                                            <i class='bx bx-pencil'></i>
                                        </a>
                                        <form id="myForm" class="d-inline" action="{{ url('/admin/image_title/' . Crypt::encryptString($item->id_imagetitle)) }}" method="POST" >
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" id="btn_delete">
                                                <i class='bx bx-trash'></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @endif
            </div>
        </div>
    </div>
@endsection
