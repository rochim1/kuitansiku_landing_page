@extends('layouts.app')

@section('content')
<!-- Start About Area -->
<section class="about-area ptb-70 mt-5">
    <div class="container mt-5 mb-5">
        <div class="insurance-details-header">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="content">
                        <h3>Simulasi Angsuran Pembiayaan BMT AT-TA'AWUN</h3>
                        <div class="contact-form">
                            <form action="#" id="form" autocomplete="off">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label class="form-label">Nominal Pembiayaan</label>
                                            <input type="text" id="nominal" name="nominal" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label class="form-label d-flex">Periode (bulan)</label>
                                            <select class="form-control" id="periode" name="periode" required>
                                                <option value="" selected="selected" disabled="disabled">Periode Pembiayaan</option>
                                                @foreach ($kalkupem as $item)
                                                    <option value="{{ $item->bunga }}">{{ $item->bulan }} Bulan</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group result">
                                      <div class="row border-top border-bottom py-2">
                                        <div class="col-md">Periode</div>
                                        <div class="col-md text-end" id="periode_hasil">0 bulan</div>
                                      </div>
                                      <div class="row border-bottom py-2">
                                        <div class="col-md">Angsuran /bulan</div>
                                        <div class="col-md text-end" id="angsuran">Rp. 0,00</div>
                                      </div>
                                      <div class="row border-bottom py-2">
                                        <div class="col-md">Total Pengembalian</div>
                                        <div class="col-md text-end" id="total">Rp. 0,00</div>
                                      </div>
                                </div>
                                <div class="form-group my-3">
                                    @if ($deskripsi_kalkupem)
                                        {!! $deskripsi_kalkupem->deskripsi_kalkupem !!}
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="optional-btn btn-submit btn btn-success" type="submit" onclick="hitung()">Hitung</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="image text-center"><img class="w-100" src="{{asset('assets_user/img/calculator-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection



