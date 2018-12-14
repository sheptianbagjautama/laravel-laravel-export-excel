<?php

namespace App\Http\Controllers;

use App\Exports\UserReportView;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;

class UserControllerView extends Controller
{


    public function laporanExcelView()
    {
        return (new UserReportView)->download('users.xlsx');
    }
}
