<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function Grafik()
    {
        return $this->db->table('tbl_rinci')
        ->join('tbl_jual', 'tbl_jual.no_faktur=tbl_rinci.no_faktur')
        ->where('month(tbl_jual.tgl_jual)', date('m'))
        ->where('year(tbl_jual.tgl_jual)', date('Y'))
        ->select('tbl_jual.tgl_jual')
        ->groupBy('tbl_jual.tgl_jual')
        ->selectSum('tbl_rinci.total_harga')
        ->selectSum('tbl_rinci.untung')
        ->get()->getResultArray();
    }

    public function laporanHariIni()
    {
        return $this->db->table('tbl_rinci')
        ->join('Penjualan', 'Penjualan.no_faktur=DetailData.no_faktur')
        ->where('mounth(Penjualan.tgl_jual)', date('Y-m-d'))
        ->groupBy('Penjualan.tgl_jual')
        -selectSum('RinciJual.subtotal')
        -selectSum('RinciJual.untung')
        ->get()
        ->getRowArray();
    }
    public function laporanBulanIni()
    {
        return $this->db->table('tbl_rinci')
        ->join('Penjualan', 'Penjualan.no_faktur=DetailData.no_faktur')
        ->where('(Penjualan.tgl_jual)', date('M'))
        ->groupBy('mounth(Penjualan.tgl_jual)')
        -selectSum('DetailJual.subtotal')
        ->get()
        ->getRowArray();
    }
    public function laporanTahunIni()
    {
        return $this->db->table('tbl_rinci')
        ->join('Penjualan', 'Penjualan.no_faktur=DetailData.no_faktur')
        ->where('year(Penjualan.tgl_jual)', date('Y'))
        ->groupBy('year(Penjualan.tgl_jual)')
        -selectSum('DetailJual.subtotal')
        ->get()
        ->getRowArray();
    }
    public function produk()
    {
        $this->db->table('produk')->countAll();
    }
    public function kategori()
    {
        $this->db->table('kategori')->countAll();
    }
    public function satuan()
    {
        $this->db->table('satuan')->countAll();
    }
    public function user()
    {
        $this->db->table('user')->countAll();
    }
}
?>