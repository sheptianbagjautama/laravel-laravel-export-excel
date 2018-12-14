<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class UserReportView implements FromView
{
    use Exportable;

    public function view(): View
    {
        // TODO: Implement view() method.
        return view('excel.users',[
           'users' => User::all()
        ]);
    }
}
