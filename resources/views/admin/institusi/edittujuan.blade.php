@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Institusi</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Tujuan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" placeholder="Judul" name="judul"
                                            id="judul">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                Berita</label>
                                            <input type="hidden" name="oldImage">
                                            <img src="" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body" class="form-label">Isi</label>
                                        <input id="body" type="hidden" name="body">
                                        <trix-editor input="body">
                                            <p>Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan misinya menetapkan
                                                tujuan sebagai berikut: <br>
                                            <ol>
                                                <li style="list-style-type: decimal">
                                                    Untuk mewujudkan misi ”Menggerakkan pembangunan berwawasan kesehatan“,
                                                    maka ditetapkan tujuan :
                                                    Mewujudkan mutu lingkungan yang lebih sehat, pengembangan sistem
                                                    kesehatan lingkungan kewilayahan,
                                                    serta menggerakkan pembangunan berwawasan kesehatan.
                                                </li>
                                                <li style="list-style-type: decimal">
                                                    Untuk mewujudkan misi ”Mendorong terwujudnya kemandirian masyarakat
                                                    untuk hidup sehat”, maka
                                                    ditetapkan tujuan: Memberdayakan individu, keluarga dan masyarakat agar
                                                    mampu menumbuhkan Perilaku
                                                    Hidup Bersih dan Sehat (PHBS) serta mengembangkan Upaya Kesehatan
                                                    Berbasis Masyarakat (UKBM).
                                                </li>
                                                <li style="list-style-type: decimal">
                                                    Untuk mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan pelayanan
                                                    kesehatan yang
                                                    bermutu, merata, dan terjangkau”, maka ditetapkan tujuan:
                                                    <ul style="margin-left: 25px">
                                                        <li style="list-style-type: circle">Meningkatkan akses, pemerataan
                                                            dan kualitas pelayanan
                                                            kesehatan melalui Rumah Sakit, Balai Kesehatan, Puskesmas dan
                                                            jaringannya.
                                                        </li>
                                                        <li style="list-style-type: circle">Meningkatkan kesadaran gizi
                                                            keluarga dalam upaya
                                                            meningkatkan status gizi masyarakat.</li>
                                                        <li style="list-style-type: circle">Menjamin ketersediaan,
                                                            pemerataan, pemanfaatan, mutu,
                                                            keterjangkauan obat dan perbekalan kesehatan serta pembinaan
                                                            mutu makanan.
                                                        </li>
                                                        <li style="list-style-type: circle">Mengembangkan kebijakan, sistem
                                                            pembiayaan dan manajemen
                                                            pembangunan kesehatan.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li style="list-style-type: decimal">Untuk mewujudkan misi ”Meningkatkan
                                                    upaya pengendalian penyakit dan
                                                    penanggulangan masalah kesehatan”, maka ditetapkan tujuan: Mencegah
                                                    menurunkan dan mengendalikan
                                                    penyakit menular dan tidak menular serta masalah kesehatan lainnya.
                                                </li>
                                                <li style="list-style-type: decimal">Untuk mewujudkan misi ”Meningkatkan dan
                                                    mendayagunakan sumberdaya
                                                    kesehatan”, maka ditetapkan tujuan: Meningkatkan jumlah, jenis, mutu dan
                                                    penyebaran tenaga kesehatan
                                                    sesuai standar.</li>
                                            </ol>
                                            Tugas, Fungsi dan Struktur Organisasi Dinas Kesehatan Provinsi Jawa timur dapat
                                            dilihat <a
                                                href="https://dinkes.jatimprov.go.id/userimage/dokumen/Tugas_Fungsi_dan_Struktur_Organisasi.pdf">disini</a>
                                            Peraturan Gubernur Jawa Timur No 79 Tahun 2008 Tentang Uraian Tugas Dinas
                                            Kesehatan Provinsi Jawa Timur
                                            dapat dilihat <a
                                                href="https://dinkes.jatimprov.go.id/userimage/dokumen/PERGUB_79_2008_URAIAN_TUGAS_DINKES_JATIM.pdf">disini</a>
                                            </p>
                                        </trix-editor>
                                    </div>

                                    <div class="form-group">
                                        <label for="smallSelect">Bidang</label>
                                        <select class="form-control form-control-sm" name="bidang_id">
                                            <option value="">Sekretariat</option>
                                            <option value="">Kesehatan Masyarakat</option>
                                            <option value="">Pencegahan dan Pengendalian Penyakit</option>
                                            <option value="">Pelayanan Kesehatan</option>
                                            <option value="">Sumber Daya Kesehatan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <a href="/institusi" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/institusi" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
