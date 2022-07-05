@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada 22 Maret 2022</div>
            <div class="position-relative h-150">
                <p>Kebijakan Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan tujuan dan sasaran yang akan dicapai
                    dirumuskan sebagai berikut: <br>
                <ol>
                    <li style="list-style-type: decimal">
                        Dalam rangka mewujudkan misi “Menggerakkan pembangunan berwawasan kesehatan”, maka ditetapkan
                        kebijakan: Pemantapan pembangunan berwawasan kesehatan.
                    </li>
                    <li style="list-style-type: decimal">
                        Dalam rangka mewujudkan misi “Mendorong terwujudnya kemandirian masyarakat untuk hidup sehat”, maka
                        ditetapkan kebijakan:
                        <ul style="margin-left: 25px">
                            <li style="list-style-type: circle">Pengembangan Upaya Kesehatan Berbasis Masyarakat (UKBM)
                            </li>
                            <li style="list-style-type: circle">Peningkatan lingkungan sehat</li>
                        </ul>
                    </li>
                    <li style="list-style-type: decimal">
                        Dalam rangka mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan pelayanan kesehatan yang
                        bermutu, merata, dan terjangkau”, maka ditetapkan kebijakan:
                        <ul style="margin-left: 25px">
                            <li style="list-style-type: circle">Percepatan penurunan kematian ibu dan anak.
                            </li>
                            <li style="list-style-type: circle">Peningkatan akses dan kualitas pelayanan kesehatan terutama
                                bagi masyarakat miskin, daerah tertinggal, terpencil, perbatasan dan kepulauan.</li>
                            <li style="list-style-type: circle">Pemenuhan ketersediaan dan pengendalian obat, perbekalan
                                kesehatan dan makanan.
                            </li>
                            <li style="list-style-type: circle">Peningkatan pembiayaan kesehatan dan pengembangan kebijakan
                                dan manajemen kesehatan.
                            </li>
                        </ul>
                    </li>
                    <li style="list-style-type: decimal">Dalam rangka mewujudkan misi ”Meningkatkan upaya pengendalian
                        penyakit dan penanggulangan masalah kesehatan”, maka ditetapkan kebijakan :
                        <ul style="margin-left: 25px">
                            <li style="list-style-type: circle">Penanganan masalah gizi kurang dan gizi buruk pada bayi,
                                anak balita,ibu hamil dan menyusui
                            </li>
                            <li style="list-style-type: circle">Peningkatan pencegahan, surveilans, deteksi dini penyakit
                                menular, penyakit tidak menular, penyakit potensial KLB/wabah dan ancaman epidemi yang
                                dikuti dengan pengobatan sesuai standar serta penanggulangan masalah kesehatan lainnya dan
                                bencana.</li>
                        </ul>
                    </li>
                    <li style="list-style-type: decimal">Dalam rangka mewujudkan misi ”Meningkatkan dan mendayagunakan
                        sumberdaya kesehatan”, maka ditetapkan kebijakan: Penyediaan tenaga kesehatan di rumah sakit, balai
                        kesehatan, puskesmas dan jaringannya serta mendayagunakan tenaga kesehatan yang kompeten sesuai
                        kebutuhan.</li>
                </ol>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
