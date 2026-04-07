<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    
    // Pastikan created_at masuk ke dalam allowedFields
    protected $allowedFields = ['judul', 'isi', 'slug', 'created_at'];

    // Aktifkan fitur otomatis CodeIgniter
    protected $useTimestamps = true;
protected $createdField  = 'created_at';
protected $updatedField  = ''; // Kosongkan jika kolom updated_at tidak ada
    
}
