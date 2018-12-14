<?php


namespace App\Exports;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserReportCollection implements FromCollection
{

    /**
     * BASIC USAGE
     * Menggunakan FromCollection
     * Digunakan biasanya untuk mendapat seluruh data di DB
     *
     * best practise untuk menangani data yang tergolong menengah
     */
    public function  collection()
    {
        // TODO: Implement collection() method.
        return User::all();
    }
}
