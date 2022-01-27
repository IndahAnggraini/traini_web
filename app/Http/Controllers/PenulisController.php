<?php

namespace App\Http\Controllers;

use App\Mail\BeritaTerbaruMail;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;

class PenulisController extends Controller
{


    public function index(){
        return view('penulis.artikel_tulis');
    }

    public function saveArtikel(Request $r){
        //pakai json_decode krna di blade pakai stringify
        $data = json_decode($r->list_form_to_php,true);

        //$d = $r->list_form_to_php;
        if ($r->hasFile('gambar')) {
            if (
                //merubah huruf besar bisa jdi kecil --> strtolower
                strtolower($r->gambar->getClientMimeType()) == 'image/jpeg' ||
                strtolower($r->gambar->getClientMimeType()) == 'image/jpg' ||
                strtolower($r->gambar->getClientMimeType()) == 'image/png'
            ){
                if (strtolower($r->gambar->getClientMimeType()) == 'image/jpeg') {
                    $image = imagecreatefromjpeg($r->gambar);
                } elseif (strtolower($r->gambar->getClientMimeType()) == 'image/png') {
                    $image = imagecreatefrompng($r->gambar);
                } elseif (strtolower($r->gambar->getClientMimeType()) == 'image/jpg') {
                    $image = imagecreatefromjpeg($r->gambar);
                }

                //photo dan time cuma penamaan, photo mrupkan variabel
                $photo = time() . '.jpg';
                imagejpeg($image, public_path('assets/img/'.$photo));
                //utk pembersih server
                imagedestroy($image);

                $berita = Berita::create([
                    'user_id' => 1,
                    'category_id' => $data['kategori'],
                    'judul' => $data['judul'],
                    'gambar' => '/assets/img/' .$photo,
                    'sumber' => $data['sumber'],
                    'isi' => $data['isi'],
                    'status' => $data['status']
                    // 'tgl_terbit' => $data['tgl_terbit']
                ]);

                $details = [
                    'judul' => $berita->judul,
                    'status' =>$berita->status
                ];
            }
        }else{
            $berita = Berita::create([
                'user_id' => 1,
                'category_id' => $data['kategori'],
                'judul' => $data['judul'],
                'sumber' => $data['sumber'],
                'isi' => $data['isi'],
                'status' => $data['status']
                // 'tgl_terbit' => $data['tgl_terbit']
            ]);


            // $details = [
            //     'judul' => $berita->judul,
            //     'status' =>$berita->status
            // ];

             $details = [
                'judul' => $berita->judul,
                'status' =>$berita->status
            ];
        }

        //setelah save artikel makam muncul notif ke email

        if(isset($details)){
            \Mail::to('belintex8@gmail.com')->send(new BeritaTerbaruMail($details));
        }


        // return $r->lisr_form_to_php;
        return "Berhasil simpan data berita dan kirim ke email";
    }

    public function semuaArtikel(){
        return view('penulis.artikel_semua');
    }

    public function fetch(){
        return Berita::get();
    }

    public function hapus($id){
        //mengambil data
        $berita = Berita::where('id',$id)->first();

        //utk mndelete isi data di DB
        Berita::where('id', $id)->delete();
        //utk mendelete gambar di file atau lokasi
        if(file_exists(public_path($berita->gambar))) {
            @unlink(public_path($berita->gambar));
        }

        return "Berhasil Hapus";
    }

    public function edit($id){
        // return $id;
        return view('penulis.artikel_edit')->with(['id' => $id]);
    }

    public function editFetch($id){
       return Berita::where('id', $id)->get();

    }

    public function editSubmit(Request $r){
        $data = json_decode($r->edit_form,true);

        Berita::where('id', $data[0]['id'])->update([
            'user_id' => 1,
            'category_id' => $data[0]['category_id'],
            'judul' => $data[0]['judul'],
            'sumber' => $data[0]['sumber'],
            'isi' => $data[0]['isi'],
            'status' => $data[0]['status']
        ]);

        return "Berhasil";
    }

    //pindah ke halaman artikel_publish
    public function publishh(){
        return view('penulis.artikel_publish');
    }

    //menampilkan semua data yg status publish
    public function get_publish(){
        return Berita::where('status','publish')->get();
    }

    //pindah ke halaman artikel_draft
    public function draftt(){
        return view('penulis.artikel_draft');
    }

    //menampilkan semua data yg status draft
    public function get_draft(){
        return Berita::where('status','draft')->get();
    }

    //menampilkan semua kategori dari Database menggunakan Model,Category
    public function get_kategori(){
        return Category::get();
    }

     //pindah ke halaman artikel_kategori
     public function menu_semuakategori(){
        return view('penulis.artikel_semua_kategori');
    }

    //menampilkan semua kategori dari Database ke halaman artikel_semua_kategori
    public function get_semuakategori(){
        return Category::get();
    }

     //pindah ke halaman artikel_kategori
     public function menu_kategori(){
        return view('penulis.artikel_kategori');
    }

    //menyimpan data ketika di submit pada halaman kategori
    public function saveKategori(Request $r){
        //pakai json_decode krna di blade pakai stringify
        $data = json_decode($r->list_form_to_php,true);

        $Category = Category::create([
            'kategori' => $data['kategori']
        ]);

        return "Berhasil simpan data berita";
    }

    //menghapus kategori di halaman semua kategori
    public function kategoriHapus($id){
        Category::where('id', $id)->delete();

        return "Berhasil Hapus";
    }

    //utk pindh ke halaman artikel_edit_kategori
    public function kategoriEdit($id){
        return view('penulis.artikel_edit_kategori')->with(['id' => $id]);
    }

    //utk menampilkan dri DB yg akan diedit tabel kategori
    public function kategoriFetch($id){
        return Category::where('id', $id)->get();

     }

     //submit kategori setelah edit
     public function kategoriSubmit(Request $r){
        $data = json_decode($r->edit_form,true);

        Category::where('id', $data[0]['id'])->update([
            'kategori' => $data[0]['kategori']
        ]);

        return "Berhasil";
    }
}

