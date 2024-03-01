<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets_admin/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title }} - BMT At Taawun</title>
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
    <meta name="description" content="" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets_admin/fonts/icon.css') }}">

    <!-- template -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/template-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/template-admin-theme-default.css') }}">

    <!-- scrollbar -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/scrollbar.css') }}">
    <script src="{{ asset('assets_admin/js/scrollbar.js') }}"></script>

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/bootstrap-4/dist/css/bootstrap.min.css') }}">

    {{-- datatable --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/datatables/DataTables-1.11.3/css/dataTables.bootstrap5.min.css') }}">

    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/sweetalert2/sweetalert2.min.css') }}">

    {{-- search select option --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/search_optionselect/select2.min.css') }}">
    
    {{-- khoting deskription --}}
    <link href="{{asset('css/kothing.css')}}" rel="stylesheet">
    <script src="{{asset('js/kothing.js')}}"></script>

    {{-- tric css --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/trix_textarea/trix.css') }}">

    {{-- ckeditor --}}
    <script src="{{ asset('assets_admin\ckeditor/ckeditor.js') }}"></script>
    {{-- <script src="{{ asset('assets_admin\ckeditor/ckeditorImageResize.js') }}"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> --}}
    <script src="{{ asset('js/ck-plugins.js') }}"></script>
    {{-- <script type="module" src="https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-image@38.0.1/src/index.min.js"></script> --}}
    
    {{-- my css --}}
    <style>
        .width-table {
            width: 1%;
            white-space: nowrap;
        }

        /* hidden icon image plugin textarea */
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="row justify-content-center py-4">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center text-center my-n1 text-decoration-none text-muted"
                        href="{{ url('admin/dashboard') }}">
                        <img src="{{ asset('favicon.png') }}" alt class="w-px-30 h-auto rounded-circle me-3" />
                        <div class="">BMT<br>At BMT At Taawun</div>
                    </a>
                </div>
                <hr class="mt-n2">

                {{-- sidebar --}}
                @include('admin.layouts.sidebar')

            </aside>

            <div class="layout-page">

                {{-- navbar --}}
                @include('admin.layouts.navbar')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y px-n3">

                        {{-- content --}}
                        @yield('content')

                    </div>

                    {{-- Footer --}}
                    @include('admin.layouts.footer')

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    {{-- Jquery --}}
    <script src="{{ asset('assets_admin/jquery/jquery-3.6.0.min.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('assets_admin/js/bootstrap.js') }}"></script>

    <!-- scrol bar -->
    <script src="{{ asset('assets_admin/js/perfect-scrollbar.js') }}"></script>

    <!-- sidebar -->
    <script src="{{ asset('assets_admin/js/sidebar.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets_admin/js/template-admin.js') }}"></script>

    {{-- search select option --}}
    <script src="{{ asset('assets_admin/search_optionselect/select2.min.js') }}"></script>
    <script>
        $(".searchSelect").select2();
    </script>

    {{-- trix JS --}}
    <script src="{{ asset('assets_admin/trix_textarea/trix.js') }}"></script>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
    
    {{-- ck editor --}}
    <script>
        let ckAttribute = {
            toolbar: {
                items: [
                    "undo",
                    "redo",
                    "|",
                    "heading",
                    // "|",
                    // "|", "fontfamily", "fontsize", "fontColor", "fontBackgroundColor",
                    "|", "bold", "italic", "strikethrough", "subscript", "superscript", "code",
                    "|",
                    "link",
                    "bulletedList",
                    "numberedList",
                    "|",
                    "alignment",
                    "indent",
                    "outdent",
                    "|",
                    "imageUpload",
                    "editable",
                    "blockQuote",
                    "mediaEmbed",
                ],
            },
            image: {
            toolbar: ["imageTextAlternative", "imageStyle:full", "imageStyle:side", "toggleImageCaption"],
            },
        };

        ClassicEditor.create(document.querySelector('#ck_editor_berita'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.berita', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#ck_editor_sejarah'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.sejarah', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#ck_editor_deposito_syariah'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.deposito_syariah', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#ck_editor_simpanan'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.simpanan', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#ck_editor_pembiayaan'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.pembiayaan', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor.create(document.querySelector('#ck_editor_zis'), {
            // ...ckAttribute,
            ckfinder: {
                uploadUrl: "{{ route('ckeditor.zis', ['_token' => csrf_token()]) }}",
            }
        })
        .catch(error => {
            console.error(error);
        });

    </script>

    {{-- datatable --}}
    <script src="{{ asset('assets_admin/datatables/DataTables-1.11.3/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_admin/datatables/DataTables-1.11.3/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.dataTable').DataTable();
        });
    </script>

    {{-- sweetalert2 --}}
    <script src="{{ asset('assets_admin/sweetalert2/sweetalert2.min.js') }}"></script>

    {{-- confirmasi destroy --}}
    <script>
        $(document).on('click', '#btn_delete', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Data akan terhapus secara permanen',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit();
                }
            })
        });
        
        // confirmasi logout
        $(document).on('click', '#btn_logout', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Yakin anda yakin?',
                text: 'Anda akan keluar dari Form ini',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Keluar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        });

        // informasi
        $(document).on('click', '#info', function (e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'info',
                text: 'kendala atau improvement dalam aplikasi hubungi 08215444119 Rochim',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok!'
            })
        });

    </script>
    @include('sweetalert::alert')
    @stack('script')
</body>

</html>
