@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/deposito_syariah/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                @if (!count($deposito_syariah))
                <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                <div class="table-responsive">
                    <table class="table table-hover  dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jangka Waktu</th>
                                <th>Nisbah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deposito_syariah as $item)
                            <tr>
                                <td class="width-table">{{ $no++}}</td>
                                <td>{{ $item->jangka_waktu }} Bulan</td>
                                <td>{{ $item->nisbah }}</td>
                                <td class="width-table">
                                    <a href="{{ url('/admin/deposito_syariah/' . Crypt::encryptString($item->id_deposito_syariah)) }}"
                                        class="btn btn-outline-info">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="{{ url('admin/deposito_syariah/' . Crypt::encryptString($item->id_deposito_syariah) . '/edit') }}"
                                        class="btn btn-outline-success mx-1">
                                        <i class='bx bx-pencil'></i>
                                    </a>
                                    <form id="myForm" class="d-inline"
                                        action="{{ url('/admin/deposito_syariah/' . Crypt::encryptString($item->id_deposito_syariah)) }}"
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
                <form action="/admin/deposito_syariah/deskripsi/create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="deskripsi_depsyar">deskripsi</label>@if ($deskripsi == '' || !$deskripsi)
                        <span class="badge badge-danger">!</span>
                        @endif
                        <input type="hidden" id="deskripsi_depsyar" name="deskripsi_depsyar" 
                            @if (!$deskripsi)
                                value="{{ old('deskripsi_depsyar') }}"
                            @else
                                value="{{ old('deskripsi_depsyar', $deskripsi->deskripsi_depsyar) }}"
                            @endif
                        >
                        <trix-editor input="deskripsi_depsyar" class="@error('deskripsi_depsyar') border border-danger @enderror"></trix-editor>
                        @error('deskripsi_depsyar')
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