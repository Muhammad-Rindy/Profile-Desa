@extends('layouts.master')

@section('content')
    <div class="container" style="padding: 50px 30px;">
        <h3 class="mb-5" style="text-align: center;">Artikel Desa Sumber Brantas</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2023/07/Profil-Desa-Wisata-Sumber-Brantasl.png"
                        class="img-article" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Profil Desa Wisata Sumber Brantas</h5>
                        <p class="card-text">Pada selang waktu 1 Juli hingga 2 Agustus 2023, Universitas Brawijaya
                            mengirimkan
                            salah satu dari 1000 kelompok dari program Mahasiswa Membangun Desa ke Desa Sumber
                            Brantas</p>
                    </div>
                    <a href="{{ route('article-1') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/brakseng-sumberbrantas-banner.jpg"
                        class="img-article" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Wisata Brakseng Sumberbrantas Bumiaji Kota Batu Malang</h5>
                        <p class="card-text">Kawasan wisata puncak Brakseng merupakan inisiatif warga masyarakat dan
                            pemerintah
                            desa Sumberbrantas sendiri. Pembangunan wisata Brakseng dilakukan dalam masa jabatan
                            Kepala Desa Juadi pada tahun 2017.
                        </p>
                    </div>
                    <a href="{{ route('article-2') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2023/01/1-scaled.jpg" class="img-article"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kitab Budaya Sumberbrantas karya Tim MBKM FISIP Membangun Desa
                            Universitas Brawijaya</h5>
                        <p class="card-text">Pada tanggal 30 Desember 2022, tim MBKM FISIP Membangun Desa resmi
                            menyelesaikan pengabdian di Desa Sumberbrantas.</p>
                    </div>
                    <a href="{{ route('article-3') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2022/10/Kubis.jpg" class="img-article"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sumberbrantas Petani Makmur di Jawa Timur</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    <a href="{{ route('article-4') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/3.jpg" class="img-article" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Luncurkan Sistem Informasi Desa, Wisata dan Komoditas Sayur Semakin
                            Meningkat</h5>
                        <p class="card-text">Harapan meningkatkan penghasilan warga desa untuk mencapai kesejahteraan
                        </p>
                    </div>
                    <a href="{{ route('article-5') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://sumberbrantas.id/wp-content/uploads/2022/09/2.jpg" class="img-article" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sumberbrantas Go Organik Dalam Penanaman Komoditas Kentang</h5>
                        <p class="card-text">Pemerintah Desaa Sumberbrantas bersama para petani dalam meningkatkan hasil</p>
                    </div>
                    <a href="{{ route('article-6') }}" class="btn btn-primary " style="color: white">Selengkapnya ...</a>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
