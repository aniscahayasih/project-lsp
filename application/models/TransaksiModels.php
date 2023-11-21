<?php 
namespace App\Models;

use CodeIgniter\Model;

class TransaksiModels extends Model {
    protected $table = 'transaksi';
    protected $allowedFields = ['id_transaksi', 'id_pendaftaran', 'no_nota', 'tanggal', 'bayar', 'kembali', 'total', 'status', 'id_user', 'nama_pencuci'];
}