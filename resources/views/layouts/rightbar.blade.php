<div class="right-side">
    <aside class="widget-area" id="secondary">
        <section class="widget widget_search">
            <form class="search-form" action="{{ url('/berita') }}">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" name="search" class="search-field" placeholder="Search...">
                </label>
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </section>

        <section class="widget widget_nan_posts_thumb">
            <h3 class="widget-title">Berita Unggulan</h3>
            @foreach ($beritaUnggulan as $item)
                <article class="item">
                    <a href="{{url('/berita/detail/'.$item->id_berita)}}" class="thumb">
                        <span class="fullimage cover bg1"
                            style="background-image: url({{ asset('storage/' . $item->gambar_berita) }})"
                            role="img"></span>
                    </a>
                    <div class="info">
                        <time datetime="{{ $item->created_at }}">{{ $item->created_at->format('d M Y') }}</time>
                        <h4 class="title usmall"><a href="{{url('/berita/detail/'.$item->id_berita)}}">@php echo substr(strip_tags($item->judul_berita), 0, 50); @endphp</a></h4>
                    </div>

                    <div class="clear"></div>
                </article>
            @endforeach
        </section>

        <section class="widget widget_recent_entries">
            <h3 class="widget-title">Berita Terbaru</h3>

            <ul class="usmall">
                @foreach ($beritaTerbaru as $item)
                    <li><a href="{{ url('berita/detail/' . $item->id_berita) }}">@php
                                echo substr(strip_tags($item->judul_berita), 0, 50);
                            @endphp</a>
                    </li>
                @endforeach
            </ul>
        </section>

        <section class="widget widget_archive">
            <h3 class="widget-title">Arsip</h3>

            <ul class="usmall">
                <li><a href="/berita/arsip/{{mktime(0, 0, 0, date('m'), date('d'), date('Y'))}}">@php
                    echo date('M Y', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
                @endphp</a></li>
                <li><a href="/berita/arsip/{{mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'))}}">@php
                    echo date('M Y', mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')));
                @endphp</a></li>
                <li><a href="/berita/arsip/{{mktime(0, 0, 0, date('m') - 2, date('d'), date('Y'))}}">@php
                    echo date('M Y', mktime(0, 0, 0, date('m') - 2, date('d'), date('Y')));
                @endphp</a></li>
            </ul>
        </section>

        <section class="widget widget_categories">
            <h3 class="widget-title">Kategori</h3>

            <ul class="usmall">
                @foreach ($kategoriBerita as $item)
                    <li><a href="/berita/kategori/{{ $item->nama_kateber }}">{{ $item->nama_kateber }}</a></li>
                @endforeach
            </ul>
        </section>

        {{-- <section>
            <div class="about-image">
                <img src="{{ asset('asset_user/img/about-img1.jpg') }}" alt="image">

                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i
                        class="fas fa-play"></i></a>
            </div>
        </section> --}}
    </aside>

</div>
