@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }} </h4>
            <div>
                <a href="{{ url('/admin/pembiayaan/create') }}" class="btn btn-primary btn-icon-split">
                    <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @if(!count($pembiayaan))
                    <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover  dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Dibuat</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembiayaan as $item)
                                    <tr>
                                        <td class="width-table">{{ $no++}}</td>
                                        <td>{{ $item->created_at->format('d M Y') }}</td>
                                        <td>{{ $item->katepem->nama_katepem }}</td>
                                        <td>@php
                                                 echo substr(strip_tags($item->deskripsi_pembiayaan), 0, 50);
                                            @endphp
                                            ...
                                        </td>
                                        <td class="width-table">
                                            <a href="{{ url('/admin/pembiayaan/' . Crypt::encryptString($item->id_pembiayaan )) }}" class="btn btn-outline-info">
                                                <i class='bx bx-show'></i>
                                            </a>
                                            <a href="{{ url('admin/pembiayaan/' . Crypt::encryptString($item->id_pembiayaan ). '/edit') }}" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <form id="myForm" class="d-inline" action="{{ url('/admin/pembiayaan/' . Crypt::encryptString($item->id_pembiayaan )) }}" method="POST">
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
