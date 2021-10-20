<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImportStudents implements ToModel,WithHeadingRow,FromCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection()
    {   
        return Students::all();
    }
    public function model(array $row)
    {
       
        return new Students([
            //'id'     => $row['id'],
            'nis'     => $row['nis'],
            'namaSiswa'     => $row['namasiswa'],
            'kompetensiKeahlian'     => $row['kompetensikeahlian'],
            'kelas'     => $row['kelas'],
            'tempatLahir'     => $row['tempatlahir'],
            'tanggalLahir'     => $row['tanggallahir'],
            'jenisKelamin'     => $row['jeniskelamin'],
            'golDarah'     => $row['goldarah'],
            'tahunPelajaran'     => $row['tahunpelajaran'],
            'noHP'     => $row['nohp'],
            'email'     => $row['email'],
            'alamat'     => $row['alamat'],
            'namaOrtu'     => $row['namaortu'],
            'alamatOrtu'     => $row['alamatortu'],
            'noHpOrtu'     => $row['nohportu'],
            'photoSiswa'     => $row['photosiswa'],
            'parafSiswa'     => $row['parafsiswa'],
        ]);
    }
}
