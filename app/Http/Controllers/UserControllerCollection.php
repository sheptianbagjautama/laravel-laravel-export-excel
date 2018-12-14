<?php

namespace App\Http\Controllers;

use App\Exports\UserReportCollection;
use Illuminate\Http\Request;
use Excel;

class UserControllerCollection extends Controller
{

    /**
     * Penjelasan: Fungsi yang terdapat di dalam method diatas adalah untuk men-download file excel menggunakan Facade dengan memanggil custom class yang telah dibuat yakni UserReport, dimana UserReport tersebut me-return data dari table users secara keseluruhan dan kemudian men-download-nya dengan nama file users.xlsx
     */
    public function laporanExcelFromCollection()
    {
        return Excel::download(new UserReportCollection,'users.xlsx');
    }

}
