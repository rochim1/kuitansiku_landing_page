@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                @if (count($kotak_saran))
                    <table class="table table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kotak_saran as $item)
                                <tr>
                                    <th class="width-table">{{ $no++ }}</th>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if ($item->open)
                                            <span class="badge badge-success">Opened</span> 
                                        @else
                                            <span class="badge badge-danger">Unopened</span> 
                                        @endif
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td class="width-table">
                                        <a href="{{ url('/admin/kotak_saran/' . Crypt::encryptString($item->id_kotak_saran)) }}" class="btn btn-outline-info mx-1">
                                            <i class='bx bx-show'></i>
                                        </a>
                                        <form id="myForm" class="d-inline" action="{{ url('/admin/kotak_saran/' . Crypt::encryptString($item->id_kotak_saran)) }}" method="POST">
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
                    <h6 class="text-center">Data {{ $title }} Tidak Ada!</h6>
                @endif
            </div>
        </div>
    </div>
</div>
    
@endsection