<ul class="menu-inner py-1">
    <li class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ url('admin/dashboard') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-dashboard'></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
    @if (auth()->user()->super_user)
        @can('super_user')
        <li class="menu-item {{ Request::is('admin/user') ? 'active' : '' }}">
            <a href="{{ url('admin/user') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-user'></i>
                <div data-i18n="Analytics">User</div>
            </a>
        </li>
        @endcan
    @endif

    <li class="menu-item {{ Request::is('admin/linkPendaftaran') ? 'active' : '' }}">
        <a href="{{ url('admin/linkPendaftaran') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-registered'></i>
            <div data-i18n="Analytics">Link Pendaftaran</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Profil</span>
    </li>
    <li class="menu-item 
        @php
            if(Request::is('admin/sejarah*') || Request::is('admin/visi_misi*') || Request::is('admin/legalitas*') || Request::is('admin/katestrukep*')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-home-smile'></i>
            <div data-i18n="Account Settings">Tentang Kami</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/sejarah*') ? 'active' : '' }}">
                <a href="{{ url('admin/sejarah') }}" class="menu-link">
                    <div data-i18n="Account">Sejarah</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/visi_misi*') ? 'active' : '' }}">
                <a href="{{ url('admin/visi_misi') }}" class="menu-link">
                    <div data-i18n="Notifications">Visi dan Misi</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/legalitas*') ? 'active' : '' }}">
                <a href="{{ url('admin/legalitas') }}" class="menu-link">
                    <div data-i18n="Connections">Legalitas</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/katestrukep*') ? 'active' : '' }}">
                <a href="{{ url('admin/katestrukep') }}" class="menu-link">
                    <div data-i18n="Connections">Struktur Kepengurusan</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item {{ Request::is('admin/keunggulan*') ? 'active' : '' }}">
        <a href="{{ url('admin/keunggulan') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-list-check'></i>
            <div data-i18n="Basic">Keunggulan</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/sosmed*') ? 'active' : '' }}">
        <a href="{{ url('admin/sosmed') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-link-alt'></i>
            <div data-i18n="Account">Sosial Media</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/kontak*') ? 'active' : '' }}">
        <a href="{{ url('admin/kontak') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-contact'></i>
            <div data-i18n="Account">Kontak</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/jam_operasional*') ? 'active' : '' }}">
        <a href="{{ url('admin/jam_operasional') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-time-five'></i>
            <div data-i18n="Notifications">Jam Operasional</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Tamwil Dan Produk</span>
    </li>

    <li class="menu-item 
        @php
            if(Request::is('admin/katepem*') || Request::is('admin/pembiayaan*') || Request::is('admin/kalkupem*')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-credit-card'></i>
            <div data-i18n="Basic">Pembiayaan</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/katepem*') ? 'active' : '' }}">
                <a href="{{ url('admin/katepem') }}" class="menu-link">
                    <div data-i18n="Account">Kategori Pembiayaan</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/pembiayaan*') ? 'active' : '' }}">
                <a href="{{ url('admin/pembiayaan') }}" class="menu-link">
                    <div data-i18n="Account">Pembiayaan</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/kalkupem*') ? 'active' : '' }}">
                <a href="{{ url('admin/kalkupem') }}" class="menu-link">
                    <div data-i18n="Account">Kalkulator Pembiayaan</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item 
        @php
            if(Request::is('admin/katesim*') || Request::is('admin/simpanan*')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bxs-archive-in'></i>
            <div data-i18n="Account Settings">Simpanan</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/katesim*') ? 'active' : '' }}">
                <a href="{{ url('admin/katesim') }}" class="menu-link">
                    <div data-i18n="Account">Kategori Simpanan</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/simpanan*') ? 'active' : '' }}">
                <a href="{{ url('admin/simpanan') }}" class="menu-link">
                    <div data-i18n="Account">Simpanan</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item 
        @php
            if(Request::is('admin/katedeposito*') || Request::is('admin/deposito_syariah*')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bxs-shopping-bags'></i>
            <div data-i18n="Account Settings">Deposito Syariah</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/katedeposito*') ? 'active' : '' }}">
                <a href="{{ url('admin/katedeposito') }}" class="menu-link">
                    <div data-i18n="Account">Kategori Deposito Syariah</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/deposito_syariah*') ? 'active' : '' }}">
                <a href="{{ url('admin/deposito_syariah') }}" class="menu-link">
                    <div data-i18n="Account">Deposito Syariah</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-item 
        @php
            if(Request::is('admin/zis*') || Request::is('admin/kegiatan_zis')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bxs-hand'></i>
            <div data-i18n="Account Settings">ZIS</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/zis*') ? 'active' : '' }}">
                <a href="{{ url('admin/zis') }}" class="menu-link">
                    <div data-i18n="Account">ZIS</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/kegiatan_zis*') ? 'active' : '' }}">
                <a href="{{ url('admin/kegiatan_zis') }}" class="menu-link">
                    <div data-i18n="Account">Kegiatan ZIS</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Komponen</span>
    </li>
    <li class="menu-item {{ Request::is('admin/jumbotron*') ? 'active' : '' }}">
        <a href="{{ url('admin/jumbotron') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-chalkboard'></i>
            <div data-i18n="Basic">Jumbotron</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/panel*') ? 'active' : '' }}">
        <a href="{{ url('admin/panel') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-desktop'></i>
            <div data-i18n="Basic">Panel</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/tentang_kami*') ? 'active' : '' }}">
        <a href="{{ url('admin/tentang_kami') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-detail'></i>
            <div data-i18n="Basic">Tentang Kami</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/image_title*') ? 'active' : '' }}">
        <a href="{{ url('admin/image_title') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-file-image'></i>
            <div data-i18n="Basic">Image Title</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Informasi</span>
    </li>
    <li class="menu-item 
        @php
            if(Request::is('admin/persyaratan_pembiayaan*') || Request::is('admin/persyaratan_menabung*')) {
                echo 'active open';
            }
        @endphp
        ">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-rename'></i>
            <div data-i18n="Account Settings">Persyaratan</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{ Request::is('admin/persyaratan_menabung*') ? 'active' : '' }}">
                <a href="{{ url('admin/persyaratan_menabung') }}" class="menu-link">
                    <div data-i18n="Notifications">Menabung</div>
                </a>
            </li>
            <li class="menu-item {{ Request::is('admin/persyaratan_pembiayaan*') ? 'active' : '' }}">
                <a href="{{ url('admin/persyaratan_pembiayaan') }}" class="menu-link">
                    <div data-i18n="Account">Pembiayaan</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item {{ Request::is('admin/kateber*') ? 'active' : '' }}">
        <a href="{{ url('admin/kateber') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-news'></i>
            <div data-i18n="Basic">Berita</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/galeri*') ? 'active' : '' }}">
        <a href="{{ url('admin/galeri') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-images'></i>
            <div data-i18n="Basic">Galeri</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/kotak_saran*') ? 'active' : '' }}">
        <a href="{{ url('admin/kotak_saran') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-package'></i>
            <div data-i18n="Basic">Kotak Saran</div>
        </a>
    </li>
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Tambahan</span>
    </li>
    <li class="menu-item {{ Request::is('admin/maps*') ? 'active' : '' }}">
        <a href="{{ url('admin/maps') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-map'></i>
            <div data-i18n="Basic">Maps</div>
        </a>
    </li>
    <li class="menu-item {{ Request::is('admin/layangpandang*') ? 'active' : '' }}">
        <a href="{{ url('admin/layangpandang') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bxs-bullseye'></i>
            <div data-i18n="Basic">Layang Pandang</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" id="info" class="menu-link">
            <i class='menu-icon tf-icons bx bx-info-circle'></i>
            <div data-i18n="Basic">Info</div>
        </a>
    </li>
</ul>
