@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }} {{ $katestrukep->nama_katestrukep }}</h4>
            <div>
                <a href="{{ url('/admin/katestrukep/strukep/create/' . Crypt::encryptString($katestrukep->id_katestrukep)) }}" class="btn btn-primary btn-icon-split">
                    <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
                </a>
                <a href="{{ url('/admin/katestrukep/') }}" class="btn btn-danger btn-icon-split">
                    <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$katestrukep)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @elseif(!count($strukep))
                    <h6 class="text-center">Data {{ $title }} {{ $katestrukep->nama_katestrukep }} Belum Ada!</h6>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover  dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($strukep as $item)
                                    <tr>
                                        <td class="width-table">{{ $no++}}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td class="width-table">
                                            <a href="{{ url('admin/katestrukep/strukep/edit/' . Crypt::encryptString($item->id_strukep)) }}" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <form id="myForm" class="d-inline" action="{{ url('/admin/katestrukep/strukep/destroy/' . Crypt::encryptString($item->id_strukep)) }}" method="POST">
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
