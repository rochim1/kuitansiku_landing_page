@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }} {{ $kateber->nama_kateber }}</h4>
            <div>
                <a href="{{ url('/admin/kateber/berita/create/' . Crypt::encryptString($kateber->id_kateber)) }}" class="btn btn-primary btn-icon-split">
                    <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
                </a>
                <a href="{{ url('/admin/kateber/') }}" class="btn btn-danger btn-icon-split">
                    <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$kateber)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @elseif(!count($berita))
                    <h6 class="text-center">Data {{ $title }} {{ $kateber->nama_kateber }} Belum Ada!</h6>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover  dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Dibuat</th>
                                    <th>Judul Berita</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $item)
                                    <tr>
                                        <td class="width-table">{{ $no++}}</td>
                                        <td>{{ $item->created_at->format('d M Y') }}</td>
                                        <td>{{ $item->judul_berita }}</td>
                                        <td class="width-table">
                                            <a href="{{ url('/admin/kateber/berita/show/' . Crypt::encryptString($item->id_berita )) }}" class="btn btn-outline-info">
                                                <i class='bx bx-show'></i>
                                            </a>
                                            <a href="{{ url('admin/kateber/berita/edit/' . Crypt::encryptString($item->id_berita )) }}" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <form id="myForm" class="d-inline" action="{{ url('/admin/kateber/berita/destroy/' . Crypt::encryptString($item->id_berita )) }}" method="POST">
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
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
