@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kalkupem/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Itfem</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                @if (!count($kalkupem))
                <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                <div class="table-responsive">
                    <table class="table table-hover  dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>bagi hasil(%)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kalkupem->sortBy('bulan') as $item)
                            <tr>
                                <td class="width-table">{{ $no++}}</td>
                                <td>{{ $item->bulan }} Bulan</td>
                                <td>{{ $item->bunga }}</td>
                                <td class="width-table">
                                    <a href="{{ url('admin/kalkupem/' . Crypt::encryptString($item->id_kalkupem) . '/edit') }}"
                                        class="btn btn-outline-success mx-1">
                                        <i class='bx bx-pencil'></i>
                                    </a>
                                    <form id="myForm" class="d-inline"
                                        action="{{ url('/admin/kalkupem/' . Crypt::encryptString($item->id_kalkupem)) }}"
                                        method="POST">
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
        
        <div class="card">
            <div class="card-body">
                <form action="/admin/kalkupem/deskripsi/create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi_kalkupem">deskripsi</label>@if ($deskripsi == '' || !$deskripsi)
                    @endif
                        <input type="hidden" id="deskripsi_kalkupem" name="deskripsi_kalkupem" 
                            @if (!$deskripsi)
                                value="{{ old('deskripsi_kalkupem') }}"
                            @else
                                value="{{ old('deskripsi_kalkupem', $deskripsi->deskripsi_kalkupem) }}"
                            @endif
                        >
                        <trix-editor input="deskripsi_kalkupem" class="@error('deskripsi_kalkupem') border border-danger @enderror"></trix-editor>
                        @error('deskripsi_kalkupem')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="modal-footer mt-4 mb-n3">
                        <button type="submit" class="btn btn-primary">
                            <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection