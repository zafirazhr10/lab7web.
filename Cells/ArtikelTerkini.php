<?php
namespace App\Cells;

use CodeIgniter\View\Cells\Cell;
use App\Models\ArtikelModel;

class ArtikelTerkini extends Cell
{
    public function render(): string
    {
        $model = new ArtikelModel();
        // Mengambil 5 artikel terbaru berdasarkan field created_at yang baru dibuat
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();

        return view('component/artikel_terkini', ['artikel' => $artikel]);
    }
}