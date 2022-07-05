@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tata Cara Permohonan</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Tata Cara Permohonan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <a href="/ppid/tambahtcp" class="btn btn-primary">Tambah Data</a>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 20px;">No.</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Acton</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>JUDUL TATA CARA PERMOHONAN</td>
                                                <td>
                                                    <a href="/ppid/edittcp" class="btn btn-primary">Edit</a>
                                                    <form method="POST" class="d-inline">
                                                        <a href="/ppid/tata-cara-permohonan"
                                                            class="btn btn-danger">Hapus</a>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>JUDUL TATA CARA PERMOHONAN</td>
                                                <td>
                                                    <a href="/ppid/edittcp" class="btn btn-primary">Edit</a>
                                                    <form method="POST" class="d-inline">
                                                        <a href="/ppid/tata-cara-permohonan"
                                                            class="btn btn-danger">Hapus</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
