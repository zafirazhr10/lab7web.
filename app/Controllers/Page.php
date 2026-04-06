<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        // Kita buat array data untuk dikirim ke view
        $data = [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan isi halaman ini.'
        ];

        return view('about', $data); // Masukkan $data ke sini
    }
}