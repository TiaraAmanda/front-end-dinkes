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
                        <div class="card-title">Halaman Kebijakan</div>
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
                                            <p>Kebijakan Dinas Kesehatan Provinsi Jawa Timur dalam mewujudkan tujuan dan
                                                sasaran yang akan dicapai
                                                dirumuskan sebagai berikut: <br>
                                            <ol>
                                                <li style="list-style-type: decimal">
                                                    Dalam rangka mewujudkan misi “Menggerakkan pembangunan berwawasan
                                                    kesehatan”, maka ditetapkan
                                                    kebijakan: Pemantapan pembangunan berwawasan kesehatan.
                                                </li>
                                                <li style="list-style-type: decimal">
                                                    Dalam rangka mewujudkan misi “Mendorong terwujudnya kemandirian
                                                    masyarakat untuk hidup sehat”, maka
                                                    ditetapkan kebijakan:
                                                    <ul style="margin-left: 25px">
                                                        <li style="list-style-type: circle">Pengembangan Upaya Kesehatan
                                                            Berbasis Masyarakat (UKBM)
                                                        </li>
                                                        <li style="list-style-type: circle">Peningkatan lingkungan sehat
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li style="list-style-type: decimal">
                                                    Dalam rangka mewujudkan misi ”Mewujudkan, memelihara dan meningkatkan
                                                    pelayanan kesehatan yang
                                                    bermutu, merata, dan terjangkau”, maka ditetapkan kebijakan:
                                                    <ul style="margin-left: 25px">
                                                        <li style="list-style-type: circle">Percepatan penurunan kematian
                                                            ibu dan anak.
                                                        </li>
                                                        <li style="list-style-type: circle">Peningkatan akses dan kualitas
                                                            pelayanan kesehatan terutama
                                                            bagi masyarakat miskin, daerah tertinggal, terpencil, perbatasan
                                                            dan kepulauan.</li>
                                                        <li style="list-style-type: circle">Pemenuhan ketersediaan dan
                                                            pengendalian obat, perbekalan
                                                            kesehatan dan makanan.
                                                        </li>
                                                        <li style="list-style-type: circle">Peningkatan pembiayaan kesehatan
                                                            dan pengembangan kebijakan
                                                            dan manajemen kesehatan.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li style="list-style-type: decimal">Dalam rangka mewujudkan misi
                                                    ”Meningkatkan upaya pengendalian
                                                    penyakit dan penanggulangan masalah kesehatan”, maka ditetapkan
                                                    kebijakan :
                                                    <ul style="margin-left: 25px">
                                                        <li style="list-style-type: circle">Penanganan masalah gizi kurang
                                                            dan gizi buruk pada bayi,
                                                            anak balita,ibu hamil dan menyusui
                                                        </li>
                                                        <li style="list-style-type: circle">Peningkatan pencegahan,
                                                            surveilans, deteksi dini penyakit
                                                            menular, penyakit tidak menular, penyakit potensial KLB/wabah
                                                            dan ancaman epidemi yang
                                                            dikuti dengan pengobatan sesuai standar serta penanggulangan
                                                            masalah kesehatan lainnya dan
                                                            bencana.</li>
                                                    </ul>
                                                </li>
                                                <li style="list-style-type: decimal">Dalam rangka mewujudkan misi
                                                    ”Meningkatkan dan mendayagunakan
                                                    sumberdaya kesehatan”, maka ditetapkan kebijakan: Penyediaan tenaga
                                                    kesehatan di rumah sakit, balai
                                                    kesehatan, puskesmas dan jaringannya serta mendayagunakan tenaga
                                                    kesehatan yang kompeten sesuai
                                                    kebutuhan.</li>
                                            </ol>
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
