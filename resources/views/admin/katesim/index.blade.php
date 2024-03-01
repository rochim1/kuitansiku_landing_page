@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/katesim/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!count($katesim))
                    <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover  dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($katesim as $item)
                                    <tr>
                                        <td class="width-table">{{ $no++}}</td>
                                        <td>{{ $item->nama_katesim }}</td>
                                        <td class="width-table">
                                            <a href="{{ url('admin/katesim/' . Crypt::encryptString($item->id_katesim) . '/edit') }}" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <form id="myForm" class="d-inline" action="{{ url('/admin/katesim/' . Crypt::encryptString($item->id_katesim)) }}" method="POST">
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
