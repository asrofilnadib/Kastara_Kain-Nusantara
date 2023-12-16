<?php

    namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'asrofilnadib',
            'email' => 'asrofil@asrofil.co.id',
            'password' => Hash::make(12345678),
            'role' => 'admin',
            'balance' => '999999'
        ]);

        Category::create([
            'name' => 'Sumatera',
            'image' => 'banner-01.jpg'
        ]);
        Category::create([
            'name' => 'Kalimantan',
            'image' => 'banner-02.jpg'
        ]);
        Category::create([
            'name' => 'Jawa',
            'image' => 'banner-03.jpg'
        ]);
        Category::create([
            'name' => 'Sulawesi',
            'image' => 'banner-04.jpg'
        ]);
        Category::create([
            'name' => 'Papua',
            'image' => 'banner-05.jpg'
        ]);


        Product::create([
            'name' => 'Kain Besurek Bengkulu',
            'kode_product' => 'ks-16',
            'category_id' => 1,
            'description' => 'Kain Besurek Bengkulu adalah salah satu kekayaan budaya Indonesia yang berasal dari Bengkulu. Kain ini mempesona dengan keindahan motif-motifnya yang unik dan beragam, mencerminkan kekayaan alam dan kehidupan sehari-hari masyarakat Bengkulu. Motif-motif tersebut sering menggambarkan elemen-elemen alam, flora-fauna, dan seni tradisional lokal. Warna-warna yang digunakan pada kain Besurek Bengkulu juga mencirikan keceriaan dan kekayaan alam daerah tersebut.

            Proses pembuatan kain Besurek Bengkulu melibatkan keterampilan tinggi pengrajin dalam teknik pewarnaan dan pengaplikasian motif. Setiap langkah produksi, mulai dari pemberian lilin sebagai resist hingga proses pewarnaan manual, dilakukan dengan teliti untuk menciptakan karya seni tekstil yang memukau. Keunikan kain Besurek Bengkulu tidak hanya terletak pada desainnya, tetapi juga pada filosofi dan makna yang terkandung dalam setiap motif.
            
            Berkat perpaduan antara keahlian pengrajin, nilai-nilai kultural, dan kekayaan alam Bengkulu, kain Besurek Bengkulu bukan hanya sebuah pakaian, melainkan juga sebuah warisan budaya yang mencerminkan identitas dan keindahan tradisional Bengkulu. Sebagai ekspresi seni tekstil, kain Besurek Bengkulu menjadi lambang kebanggaan masyarakat dan merupakan bagian integral dari warisan budaya Indonesia yang patut dijaga dan dilestarikan.',
            'image' => 'product-16.jpg',
            'price' => 16,
        ]);
    }
}
