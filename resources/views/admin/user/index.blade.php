@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/user/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!count($user))
                    <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover  dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>dibuat pada</th>
                                    <th>verifikasi</th>
                                    <th>super admin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $item)
                                    <tr>
                                        <td class="width-table">{{ $no++}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ date('d-m-Y', strtotime($item->created_at)); }}</td>
                                        <td>
                                            @if ($item->email_verified_at !== null)
                                            {{ date('d-m-Y', strtotime($item->email_verified_at)); }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->super_user)
                                                <i class="tf-icons bx bx-check text-success"></i>
                                            @else
                                                <i class="tf-icons bx bx-cross text-danger"></i>
                                            @endif
                                        </td>
                                        <td class="width-table">
                                            @if (!$item->super_user)
                                            <a href="{{ url('admin/user/' . Crypt::encryptString($item->id) . '/edit') }}" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil'></i>
                                            </a>
                                            <form id="myForm" class="d-inline" action="{{ url('/admin/user/' . Crypt::encryptString($item->id)) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger" id="btn_delete">
                                                    <i class='bx bx-trash'></i>
                                                </button>
                                            </form>
                                            @else
                                            <a href="javascript:void(0)" class="btn btn-outline-success mx-1">
                                                <i class='bx bx-pencil text-secondary'></i>
                                            </a>
                                            <form action="javascript:void(0)" class="d-inline" method="POST">
                                                <button type="submit" disabled class="btn btn-secondary" id="btn_delete">
                                                    <i class='bx bx-trash'></i>
                                                </button>
                                            </form>
                                            @endif
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
