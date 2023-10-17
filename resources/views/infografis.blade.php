@extends('layouts.master')
@section('content')
    <div class="container">
        <main>
            <div class="infographic">
                <h3 class="mb-4" style="text-align: center;">Infografis Kependudukan</h3>
                <div class="infographic__grid">
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_1.ashx?la=en&amp;hash=C1249414ECBA01627CC52D44918BDA0ADDE56204"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-dkblue">76%</h2>
                        <p class="infographic__grid__item__p">Dewasa</p>
                    </div>
                    <!---->
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_2.ashx?la=en&amp;hash=4DDF33EF7D6DD3FFD5A90440A810EED04D06D55F"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-orange">94%</h2>
                        <p class="infographic__grid__item__p">Remaja</p>
                    </div>
                    <!---->
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_3.ashx?la=en&amp;hash=C7857E1920E916D93748F255CFD8D4BCFFA170B7"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-ltblue">78%</h2>
                        <p class="infographic__grid__item__p">Anak - Anak</p>
                    </div>
                </div>
            </div>
            <div class="infographic">
                <div class="infographic__grid">
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_1.ashx?la=en&amp;hash=C1249414ECBA01627CC52D44918BDA0ADDE56204"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-red">76%</h2>
                        <p class="infographic__grid__item__p">Tidak Sekolah</p>
                    </div>
                    <!---->
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_2.ashx?la=en&amp;hash=4DDF33EF7D6DD3FFD5A90440A810EED04D06D55F"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-green">94%</h2>
                        <p class="infographic__grid__item__p">SMA / SLTA</p>
                    </div>
                    <!---->
                    <div class="infographic__grid__item">
                        <img src="https://www.desertfinancial.com/-/media/desert-financial/lc-test/infographics/infographic__benefitsofvolunteering_3.ashx?la=en&amp;hash=C7857E1920E916D93748F255CFD8D4BCFFA170B7"
                            class="infographic__grid__item__img">
                        <h2 class="infographic__grid__item__title title-green">78%</h2>
                        <p class="infographic__grid__item__p">Diploma / Sarjana</p>
                    </div>

                </div>
            </div>
        </main>
        <div class="simple-bar-chart">
            <div class="item" style="--clr: #5EB344; --val: 80">
                <div class="label norm">Belum / Tidak Bekerja</div>
                <div class="value norm">60%</div>
            </div>

            <div class="item" style="--clr: #FCB72A; --val: 50">
                <div class="label norm">Pelajar / Mahasiswa</div>
                <div class="value norm">40%</div>
            </div>

            <div class="item" style="--clr: #F8821A; --val: 100">
                <div class="label norm">Mengurus Rumah Tangga</div>
                <div class="value norm">80%</div>
            </div>

            <div class="item" style="--clr: #E0393E; --val: 15">
                <div class="label norm">Karyawan Swasta</div>
                <div class="value norm">30%</div>
            </div>

            <div class="item" style="--clr: #963D97; --val: 1">
                <div class="label norm">Nelayan</div>
                <div class="value norm">10%</div>
            </div>

            <div class="item" style="--clr: #069CDB; --val: 90">
                <div class="label norm">Petani</div>
                <div class="value norm">70%</div>
            </div>
        </div>
    </div>
@endsection
