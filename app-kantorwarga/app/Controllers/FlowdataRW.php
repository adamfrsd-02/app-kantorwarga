<?php

namespace App\Controllers;

use App\Models\ModelRW;
use CodeIgniter\Database\Query;

class FlowdataRW extends BaseController
{
    public function __construct()
    {
        $this->ModelRW = new ModelRW();
    }

    //hapus
    public function hapusWarga($id)
    {
        $query = $this->ModelRW->deleteWarga($id);
        if($query)
        {
            return redirect('dashboardrw/data_warga');
        }
    }
}


?>