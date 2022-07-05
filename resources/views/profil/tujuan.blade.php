@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada 22 Maret 2022</div>
            <div class="position-relative h-150">
                <p>Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan misinya menetapkan tujuan sebagai berikut: <br>
                <ol>
                    <li style="list-style-type: decimal">
                        Untuk mewujudkan misi ”Menggerakkan pembangunan berwawasan kesehatan“, maka ditetapkan tujuan :
                        Mewujudkan mutu lingkungan yang lebih sehat, pengembangan sistem kesehatan lingkungan kewilayahan,
                        serta menggerakkan pembangunan berwawasan kesehatan.
                    </li>
                    <li style="list-style-type: decimal">
                        Untuk mewujudkan misi ”Mendorong terwujudnya kemandirian masyarakat untuk hidup sehat”, maka
                        ditetapkan tujuan: Memberdayakan individu, keluarga dan masyarakat agar mampu menumbuhkan Perilaku
                        Hidup Bersih dan Sehat (PHBS) serta mengembangkan Upaya Kesehatan Berbasis Masyarakat (UKBM).
                    </li>
                    <li style="list-style-type: decimal">
                        Untuk mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan pelayanan kesehatan yang
                        bermutu, merata, dan terjangkau”, maka ditetapkan tujuan:
                        <ul style="margin-left: 25px">
                            <li style="list-style-type: circle">Meningkatkan akses, pemerataan dan kualitas pelayanan
                                kesehatan melalui Rumah Sakit, Balai Kesehatan, Puskesmas dan jaringannya.
                            </li>
                            <li style="list-style-type: circle">Meningkatkan kesadaran gizi keluarga dalam upaya
                                meningkatkan status gizi masyarakat.</li>
                            <li style="list-style-type: circle">Menjamin ketersediaan, pemerataan, pemanfaatan, mutu,
                                keterjangkauan obat dan perbekalan kesehatan serta pembinaan mutu makanan.
                            </li>
                            <li style="list-style-type: circle">Mengembangkan kebijakan, sistem pembiayaan dan manajemen
                                pembangunan kesehatan.
                            </li>
                        </ul>
                    </li>
                    <li style="list-style-type: decimal">Untuk mewujudkan misi ”Meningkatkan upaya pengendalian penyakit dan
                        penanggulangan masalah kesehatan”, maka ditetapkan tujuan: Mencegah menurunkan dan mengendalikan
                        penyakit menular dan tidak menular serta masalah kesehatan lainnya.
                    </li>
                    <li style="list-style-type: decimal">Untuk mewujudkan misi ”Meningkatkan dan mendayagunakan sumberdaya
                        kesehatan”, maka ditetapkan tujuan: Meningkatkan jumlah, jenis, mutu dan penyebaran tenaga kesehatan
                        sesuai standar.</li>
                </ol>
                Tugas, Fungsi dan Struktur Organisasi Dinas Kesehatan Provinsi Jawa timur dapat dilihat <a
                    href="https://dinkes.jatimprov.go.id/userimage/dokumen/Tugas_Fungsi_dan_Struktur_Organisasi.pdf">disini</a>
                Peraturan Gubernur Jawa Timur No 79 Tahun 2008 Tentang Uraian Tugas Dinas Kesehatan Provinsi Jawa Timur
                dapat dilihat <a
                    href="https://dinkes.jatimprov.go.id/userimage/dokumen/PERGUB_79_2008_URAIAN_TUGAS_DINKES_JATIM.pdf">disini</a>
                </p>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
