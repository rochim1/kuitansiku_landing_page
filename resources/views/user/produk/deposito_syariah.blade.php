@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 "
    style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Deposito Syariah</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">
                Produk > Deposito Syariah</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <span>PRODUK</span>
                <h2>Deposito Syariah</h2>
                <div class="ck-content">
                    <p>Simpanan Deposito Syari’ah merupakan sarana pilihan investasi berjangka, dengan jangka waktu 3,
                        6, 12, 18 sampai 24 bulan. Ditujukan bagi anda yang ingin berinvestasi sesuai prinsip syari’ah
                        dengan minimal deposit adalah Rp 500.000,00.</p>
                    <ul>
                        <li><strong>Ketentuan Program</strong></li>
                    </ul>
                    <ol>
                        <li>Jumlah simpanan Deposito mulai dari&nbsp; Rp&nbsp;500.000,- sampai Rp 300.000.000.</li>
                        <li>Jangka waktu mulai 3, 6, 12, 18 sampai 24 bulan dan dapat diperpanjang.</li>
                        <li>Tidak dapat ditarik sampai jangka waktu yang ditentukan.</li>
                        <li>Nisbah bagi hasil dan hadiah yang didapatkan sesuai dengan nominal penempatan dana.</li>
                        <li>Apabila anggota mencairkan dana sebelum waktu jatuh tempo, maka akan dikenakan biaya penalti
                            sebesar 1 kali basil per sisa bulan jangka waktu deposito.&nbsp;</li>
                    </ol>
                    <ul>
                        <li><strong>Keuntungan dan Fasilitas</strong></li>
                    </ul>
                    <ol>
                        <li>Mendapatkan Bilyet Deposito Syari’ah.</li>
                        <li>Mendapatkan nisbah bagi hasil setiap bulannya.</li>
                        <li>Bagi hasil kompetitif dengan <i>Equivalent Rate</i>&nbsp;Periode Januari 2022&nbsp;sebesar
                            5,74 %</li>
                        <li>Bebas biaya administrasi bulanan.</li>
                    </ol>
                    <figure class="table">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Jangka Waktu</td>
                                    <td>Nisbah</td>
                                </tr>
                                <tr>
                                    <td>3 Bulan</td>
                                    <td>40 : 60</td>
                                </tr>
                                <tr>
                                    <td>6 Bulan</td>
                                    <td>45 : 55</td>
                                </tr>
                                <tr>
                                    <td>12 Bulan</td>
                                    <td>50 : 50</td>
                                </tr>
                                <tr>
                                    <td>18 Bulan</td>
                                    <td>55 : 45</td>
                                </tr>
                                <tr>
                                    <td>24 Bulan</td>
                                    <td>60 : 40</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p>&nbsp;</p>
                    <figure class="table">
                        <table>
                            <tbody>
                                <tr>
                                    <td><strong>No</strong></td>
                                    <td><strong>Nominal</strong></td>
                                    <td><strong>Jangka Waktu</strong></td>
                                    <td><strong>Total Bagi Hasil yang diterima</strong></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Rp 1.000.000,-</td>
                                    <td>12 Bulan&nbsp;</td>
                                    <td>Rp 57.420</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rp 5.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 287.100</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rp 10.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 574.200</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rp 20.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 1.148.400</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rp 50.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 2.871.000</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Rp 100.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 5.742.000</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rp 300.000.000,-</td>
                                    <td>12 Bulan</td>
                                    <td>Rp 17.226.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                </div>

                <div class="about-content">
                    <section class="widget widget_categories">
                        <h3 class="widget-title mb-4">Kategori Deposito Syariah</h3>
                        <ul class="usmall p-0">
                            @foreach ($katedeposito as $item)
                            <a href="/deposito_syariah/{{ $item->nama_katedeposito }}">
                                <li class="list-unstyled mt-3">
                                    {{ $item->nama_katedeposito }}
                                </li>
                            </a>
                            @endforeach
                        </ul>
                    </section>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                @include('../layouts/rightbar')
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection
