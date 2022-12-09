<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *c
     * @return void
     */
    public function run()
    {
        Artikel::create([
            'title'=>'Dampak Self-Diagnose Terhadap Kesehatan Mental',
            'lokasi_img'=>'assets\img\portfolio\a1.jpg',
            'body'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila',
            'excerpt'=>'Self-diagnosis adalah asumsi yang menyatakan bahwa seseorang terkena suatu penyakit berdasarkan pengetahuannya sendiri. Self-diagnosis sangat membahayakan kesehatan seseorang apabila',
            'published_at'=>'2022-07-25'
        ]);
        Artikel::create([
            'title'=>'5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan',
            'lokasi_img'=>'assets\img\portfolio\a2.jpg',
            'body'=>'5 Perilaku Hidup Bersih dan Sehat yang Mudah Dilakukan',
            'excerpt'=>'Dalam keseharian, kita mungkin belum menerapkan sepenuhnya perilaku hidup bersih dan sehat.',
            'published_at'=>'2022-07-25'
        ]);
        Artikel::create([
            'title'=>'Vaksinasi di Bulan Ramadhan? Batalkah Puasa?',
            'lokasi_img'=>'assets\img\portfolio\a3.jpg',
            'body'=>'Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman. Tetapi, ada syarat yang harus kita lakukan, agar mudik sebelum kita mudik, yaitu  melaksanakan vaksinasi Covid-19 dosis booster. Lalu jika ingin melakukan vaksinasi ditengah bulan ramadhan apakah diperbolehkan? Apakah melakukan vaksinasi ditengah bulan puasa akan membatalkan puasa kita juga? Mari simak penjelasan dibawah ini. Menurut Fatwa MUI Nomor 13 Tahun 2021 tentang Hukum Vaksinasi Covid-19 pada saat puasa, mengatakan bahwa Vaksinasi COVID-19 yang dilakukan dengan injeksi intramuskular (suntik) tidak membatalkan puasa. Hukumnya boleh, sepanjang tidak menyebabkan bahaya (dharar). Hal senada juga ditegaskan oleh Wakil Presiden Maruf Amin terkait vaksinasi saat berpuasa. Hal yang membatalkan (puasa) itu kalau (metode vaksinasi) masuk lewat hidung, mulut, atau dari telinga, atau dari lubang yang lain. Tapi karena vaksin (COVID-19) itu disuntik, bukan dari lubang, itu tidak membatalkan puasa. Dalam Fatwa MUI No.13 itu juga merekomendasikan vaksinasi di bulan Ramadhan agar memperhatikan keadaan umat Islam yang sedang menjalankan ibadah puasa. Jika pemerintah khawatir akan timbulnya bahaya efek vaksinasi karena kondisi fisik yang lemah saat berpuasa, MUI menyarankan agar penyuntikan dilakukan pada malam hari.

            Dapat kita tarik kesimpulan bahwa melakukan vaksinasi ditengah bulan puasa hukumnya di perbolehkan dan tidak membatalkan puasa kita. Kita juga tidak perlu khawatir untuk melakukan vaksinasi ditengah bulan puasa sebab kondisi tubuh kita tidak akan terpengaruh terhadap pemberian vaksinasi walaupun sedang dalam keadaan berpuasa.

            Yang perlu kita perhatikan sebelum vaksinasi adalah kita harus mendapatkan istirahat yang cukup dan makan yang dapat memenuhi gizi kita saat sahur nanti dan meminum air putih untuk memenuhi cairan tubuh kita.

            Mari rayakan Idul Fitri 2022 bersama keluarga dengan sukacita tanpa harus meyebarkan virus ke keluarga kita. Lengkapilah semua vaksin yang harus diterima oleh tubuh kita, agar kita tidak menjadi ancaman bagi mereka  saat bertemu kita nantinya.',
            'excerpt'=>'Pemerintah telah memberi lampu hijau untuk kita semua yang ingin melaksanakan Hari Raya Idul Fitri 2022 bersama keluarga di kampung halaman.',
            'published_at'=>'2022-07-25'
        ]);
    }
}
