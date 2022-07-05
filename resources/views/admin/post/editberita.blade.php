@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Berita</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="kategori_post" id="kategori_post" value="berita" hidden>
                                        <label for="judul">Judul</label>
                                        <input class="form-control" type="text" placeholder="Judul" name="judul"
                                            id="judul">
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input class="form-control" type="text" id="slug" name="slug"
                                                placeholder="slug">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline
                                                Berita</label>
                                            <input type="hidden" name="oldImage">
                                            <img src="/image/Berita4.png"
                                                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body" class="form-label">Isi</label>
                                        <input id="body" type="hidden" name="body">
                                        <trix-editor input="body">
                                            <p>Perda Pelindungan obat Tradisional sebagai wadah untuk
                                                Mewujudkan Kepedulian Terhadap Obat
                                                Tradisional
                                                Dengan Meningkatkan Sinergitas Pembinaan Obat Tradisional Di Jawa Timur.
                                                Pelindungan obat tradisional di
                                                Provinsi Jawa Timur dilakukan dengan membentuk Peraturan Daerah sebagai
                                                sebuah instrumen hukum untuk
                                                mengatur dan mengurus pelindungan obat tradisional. Dalam rangka memberikan
                                                pelindungan obat
                                                tradisional, Peraturan Daerah ini mengatur mengenai jenis obat tradisional,
                                                pengembangan bahan baku obat
                                                tradisional, penelitian dan pengembangan, pemanfaatan obat tradisional,
                                                pendaftaran tanaman obat dan
                                                karya intelektual obat tradisional, perizinan, sistem informasi, peran serta
                                                masyarakat, pembinaan dan
                                                pengawasan, sanksi administratif, dan ketentuan pidana. <br><br>

                                                Dalam mewujudkan tujuan Perda Nomor 6 Tahun 2020 tentang Perlindungan Obat
                                                Tradisional menjamin
                                                keamanan, khasiat/ manfaat dan mutu obat tradisional di Daerah;
                                                mengembangkan tanaman obat, hewan, biota
                                                laut, bahan baku obat tradisional, dan produk jadi di Daerah; meningkatkan
                                                pemanfaatan obat tradisional
                                                untuk upaya promotif, preventif, kuratif, dan/atau rehabiltatif di Daerah;
                                                mengurangi ketergantungan
                                                pada penggunaan obat sintesis dalam pelayanan kesehatan di Daerah. <br><br>

                                                Kepala Dinas Kesehatan Provinsi Jawa Timur dr Herlin Ferliana, M.Kes
                                                menyampaikan bahwa upaya dalam
                                                rangka mewujudkan tujuan tersebut dengan menyusun Pedoman Sinergitas
                                                Pembinaan Sarana Obat Tradisional
                                                yang diharapkan menjadi petunjuk bagi lintas sektor untuk berperan bersama
                                                dalam meningkatkan
                                                produkstivitas dan daya saing sarana obat tradiisonal di Jawa Timur,
                                                menyusun konsep pelaksanaan Perda
                                                melalui melakukan Pertemuan diskusi, Workshop untuk Menyusun Draf Pergub
                                                dengan lintas sektor dan lintas
                                                program terkait dan membuat Media KIE tentang Tata cara Perizinan Usaha
                                                Kecil Obat Tradisional. Turut
                                                serta pula berkolaborasi dengan menjalin Kerjasama dengan Instansi terkait
                                                melalui Kegiatan Kegiatan
                                                pertemuan yang bertema pengembangan obat Tradisional </p>
                                        </trix-editor>
                                    </div>

                                    <div class="form-group">
                                        <label for="tampil_headline">Pilih Untuk Dijadikan Headline </label>
                                        <select class="form-control form-control-sm" name="tampil_headline"
                                            id="tampil_headline">
                                            <option value="1">Berita</option>
                                            <option value="2">Headline</option>
                                        </select>
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
                                        <a href="/data/berita" class="btn btn-primary" type="submit">Simpan</a>
                                        <a href="/data/berita" class="btn btn-danger">Batal</a>
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
