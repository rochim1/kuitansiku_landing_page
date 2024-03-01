@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
        <a href="{{ url('/admin/galeri/create') }}" class="btn btn-primary btn-icon-split">
            <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                @if (count($galeri))
                    <table class="table table-hover table-bordered dataTable">
                        <thead class="bg-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galeri as $item)
                                <tr>
                                    <th class="text-center width-table" scope="row">{{ $no++ }}</th>
                                    <td class="text-center">
                                        @if (Storage::exists($item->gambar_galeri))
                                            <img src="{{ asset('storage/' . $item->gambar_galeri) }}"
                                                class="img-fluid rounded-start border border-4" alt="gambar galeri"
                                                style="height: 125px; object-fit: contain;">
                                        @else
                                            <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"
                                                class="img-fluid rounded-start border border-4" alt="tidak ada gambar"
                                                style="height: 125px; object-fit: contain;">
                                        @endif
                                    </td>
                                    <td class="width-table">
                                        <form id="myForm" class="d-inline" action="{{ url('/admin/galeri/' . Crypt::encryptString($item->id_galeri)) }}" method="POST" >
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
