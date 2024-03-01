@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kontak/create') }}" class="btn btn-primary btn-icon-split">
                <span class="text"><i class='menu-icon tf-icons bx bx-plus-circle'></i> Tambah Item</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!count($kontak))
                <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
                @else
                <div class="table-responsive">
                    <table class="table table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Kontak</th>
                                <th>Whatsapp</th>
                                <th>Type</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kontak as $key => $item)
                            <tr>
                                <td class="width-table">{{ $key+1}}</td>
                                <td>{{ $item->no_kontak }}</td>
                                <td>@if ($item->whatsapp) <span class="badge badge-success">Ya</span> @else <span class="badge badge-secondary">Tidak</span> @endif</td>
                                <td>
                                    @if ($key == 0)
                                        <span class="badge badge-primary">Primary</span> 
                                    @else
                                        <span class="badge badge-secondary">secondary</span> 
                                    @endif
                                </td>
                                <td>{{$item->deskripsi}}</td>
                                <td class="width-table">
                                    <a href="{{ url('admin/kontak/' . Crypt::encryptString($item->id_kontak) . '/edit') }}"
                                        class="btn btn-outline-success mx-1">
                                        <i class='bx bx-pencil'></i>
                                    </a>
                                    <form id="myForm" class="d-inline"
                                        action="{{ url('/admin/kontak/' . Crypt::encryptString($item->id_kontak)) }}"
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
                <h6>link WhatsApp</h6>
                <form action="{{ route('update.updateLinkWA') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""></label>
                        <input name="link_WA" value="@if ($linkWA){{$linkWA->link_WA}}@endif" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary"><i class='menu-icon tf-icons bx bx-save'></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <h6>keterangan tambahan</h6>
                <form action="{{ route('update.kontak') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""></label>
                        <input name="link_deskontak" value="@if ($deskontak){{$deskontak->link_deskontak}}@endif" type="text" class="form-control">
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
