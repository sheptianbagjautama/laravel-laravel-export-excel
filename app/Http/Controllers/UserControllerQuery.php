<?php

namespace App\Http\Controllers;

use App\Exports\UserReportQuery;
use Illuminate\Http\Request;
use Excel;

class UserControllerQuery extends Controller
{
    public function laporanExcelQuery()
    {
        return Excel::download(new UserReportQuery('jr.'),'users.xlsx');
    }
}
