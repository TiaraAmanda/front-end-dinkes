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
                        <div class="card-title">Halaman Saka Bakti Husada</div>
                    </div>
                    <div class="card-body">
                        <a href="/datainformasi/tambahdatasbh" class="btn btn-primary">Tambah Data Saka Bakti Husada</a>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 20px;">No.</th>
                                        <th scope="col">Nama Halaman</th>
                                        <th scope="col" style="width: 20px;">Acton</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Halaman Saka Bakti Husada</td>
                                        <td>
                                            <a href="/datainformasi/saka-bakti-husada" class="btn btn-danger">Hapus</a>
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
