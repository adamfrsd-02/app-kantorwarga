<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRW extends Model
{
    //count
    public function countWarga()
    {
        return $this->db->table('tbl_warga')->countAll();
    }

    public function countAktif()
    {
        return $this->db->table('tbl_user')->where('isActive','1')->countAll();
    }

    public function countRT()
    {
        return $this->db->table('tbl_data_rt')->countAll();
    }

    public function countWilayah()
    {
        return $this->db->table('tbl_wilayah')->countAll();
    }
    
    //get row 
    public function getDataRW()
    {
        return $this->db->table('tbl_data_rw')
        ->join('tbl_wilayah', 'tbl_wilayah.id_wilayah=tbl_data_rw.id_wilayah')
        ->get()->getRowArray();
    }

    //get all data
    public function getAllWarga()
    {
        return $this->db->table('tbl_warga')
        ->join('tbl_user','tbl_user.nik=tbl_warga.id_warga')
        ->join('tbl_data_rt','tbl_data_rt.id_rt=tbl_warga.kode_rt')
        ->get()->getResultArray();
    }

    public function getAllRT()
    {
        return $this->db->table('tbl_data_rt')
        ->get()->getResultArray();
    }

    public function getAllWilayah()
    {
        return $this->db->table('tbl_wilayah')
        ->get()->getResultArray();
    }

    //delete
    public function deleteWarga($id)
    {
        return $this->db->table('tbl_warga')
        ->delete(['id_warga' => $id]);
    }
    

}
