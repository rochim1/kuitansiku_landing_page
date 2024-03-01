@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/jam_operasional/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!count($jam_operasional))
                <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                <div class="table-responsive">
                    <table class="table table-hover  dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Status</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jam_operasional as $item)
                            <tr>
                                <td class="width-table">{{ $no++}}</td>
                                <td>{{ $item->hari }}</td>
                                <td>{{ $item->status }}</td>
                                @if ($item->jam_mulai)
                                    <td>{{ date('H:i', strtotime($item->jam_mulai)) }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                @if ($item->jam_selesai)
                                    <td>{{ date('H:i', strtotime($item->jam_selesai)) }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                <td class="width-table">
                                    <a href="{{ url('admin/jam_operasional/' . Crypt::encryptString($item->id_jam_operasional ) . '/edit') }}"
                                        class="btn btn-outline-success mx-1">
                                        <i class='bx bx-pencil'></i>
                                    </a>
                                    <form id="myForm" class="d-inline"
                                        action="{{ url('/admin/jam_operasional/' . Crypt::encryptString($item->id_jam_operasional )) }}"
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
        <div class="card mt-3">
            <div class="card-body">
                <h6>keterangan tambahan</h6>
                <form action="/update/ketOperasional" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""></label>
                        <input type="hidden" id="keterangan_operasional" name="keterangan_operasional" 
                            @if (!$keteranganOperasional)
                                value="{{ old('keterangan_operasional') }}"
                            @else
                                value="{{ old('keterangan_operasional', $keteranganOperasional->keterangan_operasional) }}"
                            @endif
                        >
                        <trix-editor input="keterangan_operasional" class="@error('keterangan_operasional') border border-danger @enderror"></trix-editor>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class='menu-icon tf-icons bx bx-save'></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
