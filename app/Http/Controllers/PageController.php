<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Products
    public function produk()
    {
        $produk = ['Celana', 'Jaket', 'Sepatu', 'Sandal'];
        $url = ['celana', 'jaket', 'sepatu', 'sandal'];
        return view('product', ['produk' => $produk, 'url' => $url]);
    }

    public function celana()
    {
        return view('productDetail', ['name' => 'Celana Jeans', 'harga' => 'Rp 100.000']);
    }

    public function jaket()
    {
        return view('productDetail', ['name' => 'Jaket Kulit', 'harga' => 'Rp 950.000']);
    }

    public function sepatu()
    {
        return view('productDetail', ['name' => 'Sepatu Nike', 'harga' => 'Rp 800.000']);
    }

    public function sandal()
    {
        return view('productDetail', ['name' => 'Sandal Carvil', 'harga' => 'Rp 150.000']);
    }

    // News
    public function berita($id)
    {
        if ($id == 1) {
            return view('news', ['news' => 'Utama', 'paragraf' => 'RIRI adalah sebuah media yang praktis. 
            Berisi banyak sekali cerita yang menarik, interaktif dan selalu baru. Menjadi sebuah media yang 
            cocok untuk menemani buah hati. Anak-anak sangat suka mendengarkan dongeng dan cerita, lewat RIRI, 
            kita bisa membacakan dongeng dimana saja dan kapan saja. RIRI hadir khusus untuk buah hati, lengkap 
            dengan narasi dan suara.']);
        }
        else if ($id == 2){
            return view('news', ['news' => 'COVID', 'paragraf' => 'Banyak negara melakukan berbagai 
            opsi cara untuk mencegah penyebaran virus ini dikarenakan belum adanya vaksin untuk virus ini. 
            Salah satu yang dilakukan negara-negara di belahan bumi lainnya adalah dengan melakukan lockdown 
            atau karantina wilayah. Begitu pula yang dilakukan oleh pemerintah Indonesia, saat ini sedang dalam 
            berusaha untuk menanggulangi penyebaran virus Covid-19 salah satunya dengan memberlakukan aturan untuk 
            social distancing. Peraturan pembatasan kegiatan diluar rumah oleh pemerintah dan himbauan untuk tetap 
            berada di dalam rumah hingga waktu yang ditentukan.']);
        }
        else {
            return view('news');
        }
    }

    // Program
    public function program()
    {
        $program = ['Karir', 'Magang', 'Kunjungan Industri'];
        $url = ['karir', 'magang', 'kunjungan'];
        return view('program', ['program' => $program, 'url' => $url]);
    }

    public function karir()
    {
        return view('programDetail', ['name' => 'Karir', 'keterangan' => 'Dapat memilih beberapa pekerjaan 
        seperti game, backend, sales, dan web']);
    }

    public function magang()
    {
        return view('programDetail', ['name' => 'Magang', 'keterangan' => 'Magang dalam bidang teknis seperti Design 
        (Game design, Web/App design, UI/UX design), Art & Illustration 
        (Sketch, Storyboard, Character Dev, Game Assets Production, Animation Assets Production), 
        3D Creation, Video & Animation, Audio Engineering, QA & Testing dan Programming (Game, Web, Apps).']);
    }

    public function kunjungan()
    {
        return view('programDetail', ['name' => 'Kunjungan Industri', 'keterangan' => 'Seminar tentang perkembangan 
        industri terbaru terutama terkait dengan industri kreatif game, animasi, komik, IP (Intelectual Property)']);
    }

    // About
    public function about()
    {
        return view('about-us', ['nama' => "M. Syifa'ul Ikrom Almasyriqi", 'nim' => '1941720057', 'kelas' => 'TI-2G']);
    }
}
