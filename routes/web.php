<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

//PROFIL
    Route::get('visimisi', function(){
        return view('profil.visimisi',[
            'halaman' => 'Profil',
            'title' => 'Visi Misi'
        ]);
    });

    Route::get('motto', function(){
        return view('profil.motto',[
            'halaman' => 'Profil',
            'title' => 'Motto'
        ]);
    });

    Route::get('tujuan', function(){
        return view('profil.tujuan',[
            'halaman' => 'Profil',
            'title' => 'Tujuan'
        ]);
    });

    Route::get('kebijakan', function(){
        return view('profil.kebijakan',[
            'halaman' => 'Profil',
            'title' => 'Kebijakan'
        ]);
    });

    Route::get('strukturOrganisasi', function(){
        return view('profil.strukturOrganisasi',[
            'halaman' => 'Profil',
            'title' => 'Struktur Organisasi'
        ]);
    });

    Route::get('profilPejabat', function(){
        return view('profil.profilPejabat',[
            'halaman' => 'Profil',
            'title' => 'Profil Pejabat'
        ]);
    });

    Route::get('penghargaan', function(){
        return view('profil.penghargaan',[
            'halaman' => 'Profil',
            'title' => 'Penghargaan'
        ]);
    });

    Route::get('maklumatPelayanan', function(){
        return view('profil.maklumatPelayanan',[
            'halaman' => 'Profil',
            'title' => 'Maklumat Pelayanan'
        ]);
    });


Route::get('pelayanan', function(){
    return view('pelayanan',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'Pelayanan'
    ]);
});

Route::get('sitemap', function(){
    return view('sitemap',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'Sitemap'
    ]);
}); 

Route::get('faq', function(){
    return view('faq',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'FAQ'
    ]);
});

Route::get('kontak', function(){
    return view('kontak',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'Kontak'
    ]);
});

Route::get('pelaporan-pelanggaran', function(){
    return view('laporkankontak',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'Kontak'
    ]);
});

Route::get('UPT-Dinkes', function(){
    return view('upt',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'UPT Dinas Kesehatan'
    ]);
});

Route::get('dinas-kesehatan-kabkota', function(){
    return view('dinkes-kabkota',[
        'halaman' => 'Dinas Kesehatan',
        'title' => 'Dinas Kesehatan Kabupaten Kota'
    ]);
});

//PUBLIC CORNER
Route::get('public-corner/semua', function(){
    return view('publiccorner.all',[
        'halaman' => 'Public Corner',
        'title' => 'Semua Pertanyaan'
    ]);
});

Route::get('public-corner/view', function(){
    return view('publiccorner.detail',[
        'halaman' => 'Halaman Public Corner',
        'title' => 'Public Corner'
    ]);
});

Route::get('public-corner', function(){
    return view('publiccorner.index',[
        'halaman' => 'Halaman Public Corner',
        'title' => 'Public Corner'
    ]);
});

Route::get('public-corner/kirimpertanyaan', function(){
    return view('vendor.sweetalert.alert',[
        'halaman' => 'Halaman Public Corner',
        'title' => 'Public Corner'
    ]);
});

//DATA & INFORMASI
Route::get('publikasi', function(){
    return view('data.publikasi',[
        'halaman' => 'Data',
        'title' => 'Publikasi dan Informasi'
    ]);
});

Route::get('peraturan', function(){
    return view('data.peraturan',[
        'halaman' => 'Data',
        'title' => 'Peraturan dan Aturan'
    ]);
});

Route::get('barangjasa', function(){
    return view('data.barangjasa',[
        'halaman' => 'Data',
        'title' => 'Pengadaan Barang dan Jasa'
    ]);
});

Route::get('perencanaan', function(){
    return view('data.perencanaan',[
        'halaman' => 'Data',
        'title' => 'Perencanaan dan Evaluasi'
    ]);
});

Route::get('callcenter', function(){
    return view('data.callcenter',[
        'halaman' => 'Data',
        'title' => 'Call Center COVID-19'
    ]);
});

//BIDANG DINAS KESEHATAN
Route::get('sekretariat', function(){
    return view('berita.sekretariat',[
        'halaman' => 'Bidang',
        'title' => 'Sekretariat'
    ]);
});

Route::get('sekretariat', function(){
    return view('berita.sekretariat',[
        'halaman' => 'Bidang',
        'title' => 'Sekretariat'
    ]);
});

Route::get('kesma', function(){
    return view('berita.kesma',[
        'halaman' => 'Bidang',
        'title' => 'Kesehatan Masyarakat'
    ]);
});

Route::get('pencegahan', function(){
    return view('berita.pencegahan',[
        'halaman' => 'Bidang',
        'title' => 'Pencegahan dan Pengendalian Penyakit'
    ]);
});

Route::get('pelayanan-kesehatan', function(){
    return view('berita.pelayanankes',[
        'halaman' => 'Bidang',
        'title' => 'Pelayanan Kesehatan'
    ]);
});

Route::get('sumberdaya', function(){
    return view('berita.sumberdaya',[
        'halaman' => 'Bidang',
        'title' => 'Sumber Daya Kesehatan'
    ]);
});

Route::get('berita', function(){
    return view('berita.index',[
        'halaman' => 'Postingan',
        'title' => 'Berita'
    ]);
});

Route::get('artikel', function(){
    return view('berita.indexartikel',[
        'halaman' => 'Postingan',
        'title' => 'Artikel'
    ]);
});

Route::get('berita-view', function(){
    return view('berita.tampil',[
        'halaman' => 'Postingan',
        'title' => 'Halaman Postingan'
    ]);
});

//SURVEY KEPUASAN
Route::get('strttk', function(){
    return view('surveykepuasan.strttk',[
        'halaman' => 'Survey Kepuasan',
        'title' => 'STRTTK'
    ]);
});

Route::get('puskesmas', function(){
    return view('surveykepuasan.puskesmas',[
        'halaman' => 'Survey Kepuasan',
        'title' => 'Rekomendasi Puskesmas'
    ]);
});


//ADMIN
//LOGIN
Route::get('login', function () {
    return view('login.index');
});

//DASHBOARD
Route::get('dashboard', function () {
    return view('admin.dashboard');
});

//INSTITUSI
Route::get('institusi', function () {
    return view('admin.institusi.institusi');
});

Route::get('institusi/editvisimisi', function () {
    return view('admin.institusi.editvisimisi');
});

Route::get('institusi/editmotto', function () {
    return view('admin.institusi.editmotto');
});

Route::get('institusi/edittujuan', function () {
    return view('admin.institusi.edittujuan');
});

Route::get('institusi/editkebijakan', function () {
    return view('admin.institusi.editkebijakan');
});

Route::get('institusi/editstrukturorganisasi', function () {
    return view('admin.institusi.editstrukturorganisasi');
});

Route::get('institusi/editmaklumat', function () {
    return view('admin.institusi.editmaklumat');
});

Route::get('profilpejabat', function () {
    return view('admin.institusi.profilpejabat');
});

    Route::get('profilpejabat/kepaladinkes', function () {
        return view('admin.institusi.profilpejabat.editkepaladinkes');
    });

    Route::get('profilpejabat/sekretariat', function () {
        return view('admin.institusi.profilpejabat.sekretariat');
    });

    Route::get('profilpejabat/tambahsekretariat', function () {
        return view('admin.institusi.profilpejabat.tambahsekretariat');
    });

    Route::get('profilpejabat/bidangkesma', function () {
        return view('admin.institusi.profilpejabat.bidangkesma');
    });

    Route::get('profilpejabat/tambahbidangkesma', function () {
        return view('admin.institusi.profilpejabat.tambahbidangkesma');
    });

    Route::get('profilpejabat/bidangppk', function () {
        return view('admin.institusi.profilpejabat.bidangppk');
    });

    Route::get('profilpejabat/tambahbidangppk', function () {
        return view('admin.institusi.profilpejabat.tambahbidangppk');
    });

    Route::get('profilpejabat/bidangpk', function () {
        return view('admin.institusi.profilpejabat.bidangpk');
    });

    Route::get('profilpejabat/tambahbidangpk', function () {
        return view('admin.institusi.profilpejabat.tambahbidangpk');
    });

    Route::get('profilpejabat/bidangsdk', function () {
        return view('admin.institusi.profilpejabat.bidangsdk');
    });

    Route::get('profilpejabat/tambahbidangsdk', function () {
        return view('admin.institusi.profilpejabat.tambahbidangsdk');
    });

// PPID
Route::get('ppid/sejarah', function () {
return view('admin.ppid.sejarah');
});

Route::get('ppid/struktur-tupoksi', function () {
    return view('admin.ppid.strukturtupoksi');
});

    Route::get('ppid/tambahstrukturtupoksi', function () {
        return view('admin.ppid.tambahstrukturtupoksi');
    });

    Route::get('ppid/editstrukturtupoksi', function () {
        return view('admin.ppid.editstrukturtupoksi');
    });

Route::get('ppid/tata-cara-permohonan', function () {
    return view('admin.ppid.tcp');
});

    Route::get('ppid/tambahtcp', function () {
        return view('admin.ppid.tambahtcp');
    });

    Route::get('ppid/edittpc', function () {
        return view('admin.ppid.edittpc');
    });

Route::get('ppid/daftar-informasi-publik', function () {
    return view('admin.ppid.dip');
});

    Route::get('ppid/tambahdip', function () {
        return view('admin.ppid.tambahdip');
    });

    Route::get('ppid/editdip', function () {
        return view('admin.ppid.editdip');
    });

// PUBLIC CORNER
Route::get('admin/public-corner', function () {
    return view('admin.publiccorner.index');
});

Route::get('admin/public-corner/edit', function () {
    return view('admin.publiccorner.edit');
});

// CONFIG 
Route::get('konfig/user', function () {
    return view('admin.konfig.user');
});

Route::get('konfig/tambahuser', function () {
    return view('admin.konfig.adduser');
});

Route::get('konfig/edituser', function () {
    return view('admin.konfig.edituser');
});

Route::get('konfig/bidang', function () {
    return view('admin.konfig.bidang');
});

Route::get('konfig/sosial-media', function () {
    return view('admin.konfig.sosialmedia');
});

Route::get('konfig/popup', function () {
    return view('admin.konfig.popup');
});

Route::get('ubah-password', function () {
    return view('admin.konfig.ubahpassword');
});

// POST 
Route::get('data/artikel', function () {
    return view('admin.post.artikel');
});

Route::get('data/artikel/edit', function () {
    return view('admin.post.editartikel');
});

Route::get('data/tambahartikel', function () {
    return view('admin.post.tambahartikel');
});

Route::get('data/berita', function () {
return view('admin.post.berita');
});

Route::get('data/berita/edit', function () {
return view('admin.post.editberita');
});

Route::get('data/tambahberita', function () {
return view('admin.post.tambahberita');
});

// DATA

Route::get('data/agenda', function () {
return view('admin.data.agenda');
});

Route::get('data/tambahagenda', function () {
return view('admin.data.tambahagenda');
});

Route::get('datainformasi/dokumen-publikasi', function () {
return view('admin.data.dp');
});

Route::get('datainformasi/tambahdatadp', function () {
return view('admin.data.tambahdatadp');
});

Route::get('datainformasi/peraturan-aturan', function () {
return view('admin.data.pa');
});

Route::get('datainformasi/tambahdatapa', function () {
return view('admin.data.tambahdatapa');
});

Route::get('datainformasi/laporan-kinerja', function () {
return view('admin.data.lk');
});

Route::get('datainformasi/tambahdatalk', function () {
return view('admin.data.tambahdatalk');
});

Route::get('datainformasi/saka-bakti-husada', function () {
return view('admin.data.sbh');
});

Route::get('datainformasi/tambahdatasbh', function () {
return view('admin.data.tambahdatasbh');
});

Route::get('admin/bank-data-spm', function () {
return view('admin.data.spm');
});

Route::get('admin/tambahdataspm', function () {
return view('admin.data.tambahdataspm');
});
