@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kotak_saran') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <table>
                        <tr>
                            <a href="mailto:{{ $kotak_saran->email }}.company?subject={{ $subject }}&body={{ $message }}" class="btn btn-primary mb-3">
                                <span class="text"><i class="menu-icon tf-icons bx bx-envelope"></i>Balas</span>
                            </a>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td class="px-3">: {{ $kotak_saran->nama }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td class="px-3">: {{ $kotak_saran->created_at->format('d M Y - H:i:s T') }}</td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td class="px-3">: {{ $kotak_saran->telepon }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td class="px-3">: {{ $kotak_saran->email }}</td>
                        </tr>
                    </table>
                </div>
                <p>
                    {{ $kotak_saran->saran }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection