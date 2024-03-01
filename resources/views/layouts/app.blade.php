<!doctype html>
<html lang="zxx" class="theme-light">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('assets_user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/style-ckeditor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_user/css/dark-style.css') }}">
    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/sweetalert2/sweetalert2.min.css') }}">
    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    {{-- animation --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>BMT At Taawun</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body class="justify-content-between">
@include('layouts/navbar')
@yield('content')

<div class="go-top"><i class="fas fa-arrow-up"></i></div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="{{$linkWA}}" class="float-whatsapp" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
@include('layouts/footer')
<!-- Links of JS files -->
<script src="{{ asset('assets_user/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets_user/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets_user/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets_user/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets_user/js/slick.min.js') }}"></script>
<script src="{{ asset('assets_user/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets_user/js/appear.min.js') }}"></script>
<script src="{{ asset('assets_user/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets_user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets_user/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets_user/js/wow.min.js') }}"></script>
<script src="{{ asset('assets_user/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets_user/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets_user/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets_user/js/main.js') }}"></script>
{{-- sweetalert2 --}}
<script src="{{ asset('assets_admin/sweetalert2/sweetalert2.min.js') }}"></script>
@stack('script')
<script src="{{ asset('js/package/dist/just-validate.production.min.js') }}"></script>
<script>
    function hitung() {

        const validation = new JustValidate('#form', {
            errorFieldCssClass: 'is-invalid',
        });

        validation
            .addField('#nominal', [{
                rule: 'required',
                errorMessage: 'periode Tidak Boleh Kosong',
            }])
            .addField('#periode', [{
                rule: 'required',
                errorMessage: 'periode Tidak Boleh Kosong',
            }]);

        const nominalEl = document.getElementById('nominal');
        const periodeEl = document.getElementById('periode');
        const periode_hasil = document.getElementById('periode_hasil');
        const total = document.getElementById('total');
        const angsuran = document.getElementById('angsuran');
        const selectedText = periodeEl.options[periodeEl.selectedIndex].text;

        let nominal = nominalEl.value;
        let periode = periodeEl.value;

        if (!nominal || !periode) {
            return false;
        } else {
            periode_hasil.innerHTML = selectedText;
            nominal = parseFloat(nominal.replace(/[^\w\s]/gi, ''));
            periode = parseFloat(periode);
            periodeBulan = parseFloat(selectedText.replace('Bulan'));
        }

        let bunga = (nominal * periode) / 100;
        let totalPengembalian = nominal + bunga;
        let totalAngsuran = totalPengembalian / periodeBulan;
        totalPengembalian = totalPengembalian.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        totalAngsuran = parseFloat(totalAngsuran).toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

        total.innerHTML = "Rp. " + totalPengembalian;
        angsuran.innerHTML = "Rp. " + totalAngsuran;
    }
</script>
<script type="text/javascript">
    var rupiah = document.getElementById('nominal');
    rupiah.addEventListener('keyup', function(e) {
        rupiah.value = formatRupiah(this.value);
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

@if (session()->has('notif'))
    <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Kerja Bagus',
                text: 'Pesan Terkirim',
                icon: 'success',
                showConfirmButton: false,
                timer: 2050
            });
        }, );
    </script>
@endif
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 1500
    });
  </script>
  <script>
        let tables = document.getElementsByTagName("table");
        if (tables.length) {
            for(const table of tables) {
                if (table && table.parentNode.className === "table") {   
                    table.classList.add("table", "cktable", "table-hover");
                }
            }
        }
    </script>
</body>

</html>
