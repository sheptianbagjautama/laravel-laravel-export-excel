<?php


namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromQuery;

class UserReportQuery implements FromQuery
{
    /**
     * apabila telah memiliki data yang cukup banyak maka package ini menawarkan fungsi lain untuk membuat performace eksekusinya menjadi lebih baik, yakni dengan menggunakan FromQuery
     * Output yang dihasilkan akan tetap sama dengan yang sebelumnya, dan letak perbedaannya akan terasa apabila telah menyangkut jumlah data yang cukup besar.
     */
//    public function query()
//    {
//        // TODO: Implement query() method.
//        return User::query();
//    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /*
     *class ini secara default meminta parameter berupa string, yang kemudian query-nya kita tambahkan kondisi dimana akhiran kata mengandung karakter yang diterima dengan menggunakan where like.
     */
    public function query()
    {
        // TODO: Implement query() method.
        return User::query()->where('name','like','%'.$this->name);
    }
}
