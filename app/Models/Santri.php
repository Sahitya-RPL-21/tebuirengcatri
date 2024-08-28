<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',          // Nama lengkap calon santri
        'tanggal_lahir', // Tanggal lahir calon santri
        'jenis_kelamin', // Jenis kelamin (Laki-laki/Perempuan)
        'alamat',        // Alamat tempat tinggal calon santri
        'telepon',       // Nomor telepon calon santri
        // Tambahkan kolom lain yang diperlukan
    ];
}
