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

        Product::create([
            'name' => 'Kain Jumputan',
            'kode_product' => 'ks-15',
            'category_id' => 1,
            'description' => 'Kain Jumputan Palembang adalah salah satu jenis kain tradisional Indonesia yang berasal dari daerah Palembang, Sumatra Selatan. Kain ini memikat hati dengan keindahan dan keunikan motifnya yang khas. Dikenal sebagai "jumputan" karena proses pembuatannya yang melibatkan teknik pengumpulan dan penataan serat kain sebelum proses pewarnaan.

            Motif pada Kain Jumputan Palembang sering kali menggambarkan alam sekitar, simbol-simbol budaya, dan unsur-unsur tradisional yang khas Palembang. Keberagaman warna dan pola pada kain ini menciptakan visual yang menarik dan sarat akan makna. Pewarnaan kain ini sering dilakukan dengan teknik manual, menambah keaslian dan keunikan setiap karya.
            
            Proses pembuatan Kain Jumputan Palembang memerlukan keahlian tinggi dari para pengrajin. Dalam tahap jumputan, pengrajin mengumpulkan sejumlah benang kain dengan teknik tertentu untuk menciptakan pola yang diinginkan. Kemudian, proses pewarnaan dilakukan dengan cermat, dan hasilnya adalah kain yang penuh dengan detail dan keanggunan.
            
            Kain Jumputan Palembang bukan sekadar pakaian, melainkan warisan budaya yang merefleksikan kekayaan seni dan keindahan tradisional Palembang. Setiap kainnya adalah karya seni yang menggambarkan identitas dan kehidupan masyarakat Palembang, serta menjadi simbol penting dari warisan budaya Indonesia yang perlu dilestarikan.',
            'image' => 'product-15.jpg',
            'price' => 11,
        ]);

        Product::create([
            'name' => 'Kain Tenun Siak',
            'kode_product' => 'ks-14',
            'category_id' => 1,
            'description' => 'Kain Tenun Siak adalah kain tradisional Indonesia yang berasal dari daerah Siak, Provinsi Riau. Kain ini memancarkan keindahan dan kearifan lokal melalui proses tenun yang cermat dan desain yang khas. Dikenal dengan sebutan "songket" atau "kain tenun emas," Kain Tenun Siak sering kali dihiasi dengan motif-motif geometris yang indah dan detail.

                                Proses pembuatan kain ini melibatkan keterampilan tinggi para pengrajin tenun Siak. Benang emas atau perak digunakan untuk menenun pola-pola yang rumit pada kain, menciptakan efek cahaya dan bayangan yang mengesankan. Motif-motif yang sering digunakan mencerminkan kekayaan budaya dan sejarah Siak, termasuk gambar-gambar alam, hewan-hewan lokal, dan simbol-simbol keagamaan.

                                Kain Tenun Siak bukan hanya sebuah produk tekstil, tetapi juga sebuah warisan budaya yang memancarkan keanggunan dan kemewahan. Kain ini sering digunakan pada acara-acara istimewa, upacara adat, dan perayaan keagamaan. Kualitas kain tenun Siak juga sering diukur dari kehalusan tenunannya dan kemewahan hiasannya, termasuk penggunaan benang emas atau perak yang memberikan kilau khas.

                                Sebagai simbol kemewahan dan keindahan tradisional, Kain Tenun Siak merupakan bagian yang tak terpisahkan dari identitas budaya Riau. Keberlanjutan produksi dan apresiasi terhadap keindahan kain tenun Siak sangat penting untuk memastikan warisan budaya ini tetap hidup dan dihargai oleh generasi mendatang.',
            'image' => 'product-14.jpg',
            'price' => 17,
        ]);

        Product::create([
            'name' => 'Kain Sulam Karawo',
            'kode_product' => 'ks-13',
            'category_id' => 4,
            'description' => 'Kain Sulam Karawo adalah sebuah karya seni tekstil yang berasal dari Kabupaten Bone, Sulawesi Selatan, Indonesia. Kain ini dikenal dengan keindahan sulaman yang rumit dan teliti, menciptakan karya seni yang anggun dan bernilai tinggi. Proses pembuatannya melibatkan teknik sulam tangan yang membutuhkan keahlian tinggi.

            Motif-motif yang ada pada Kain Sulam Karawo sering kali menggambarkan kehidupan sehari-hari, budaya, dan simbol-simbol tradisional masyarakat Bone. Sulaman yang rumit dan padat menciptakan detail yang memukau, sering kali menampilkan pola geometris yang simetris dan tajam. Benang yang digunakan untuk sulaman ini sering kali berwarna-warni, menambah keindahan dan keceriaan pada kain.
            
            Kain Sulam Karawo bukan hanya sebagai pakaian atau kain hias semata, melainkan juga sebagai manifestasi seni rupa tradisional yang mencerminkan identitas dan kebanggaan budaya masyarakat Bone. Setiap kain sulam adalah bukti keterampilan tinggi dan dedikasi pengrajin dalam melestarikan seni sulaman tradisional.
            
            Keberlanjutan produksi dan apresiasi terhadap Kain Sulam Karawo sangat penting untuk melindungi dan melestarikan warisan budaya ini. Kain Sulam Karawo, dengan keindahan sulamannya yang unik, menjadi bukti nyata kekayaan seni dan kebudayaan Sulawesi Selatan yang patut dijaga dan diwariskan kepada generasi selanjutnya.',
            'image' => 'product-13.jpg',
            'price' => 20,
        ]);

        Product::create([
            'name' => 'Kain Tenun Ikat NTT',
            'kode_product' => 'ks-12',
            'category_id' => 4,
            'description' => 'Kain Tenun Ikat NTT (Nusa Tenggara Timur) adalah warisan budaya Indonesia yang menggambarkan keahlian tinggi para pengrajin serta keindahan tradisional dari wilayah NTT. Proses pembuatannya melibatkan teknik ikat benang sebelum proses tenun, menciptakan pola-pola unik dan khas yang menjadi ciri khas dari kain ini.

            Motif-motif pada Kain Tenun Ikat NTT sering kali mencerminkan kehidupan sehari-hari, alam, dan mitologi setempat. Warna-warna yang digunakan biasanya cerah dan kontras, menambah keindahan visual pada kain. Selain itu, teknik ikat benang memberikan sentuhan artistik pada kain, menampilkan corak-coral yang khas.
            
            Proses tenun ini sering kali melibatkan komunitas atau kelompok perempuan di desa-desa NTT, menunjukkan bahwa kain tenun memiliki peran sosial dan ekonomi yang penting dalam masyarakat setempat. Kain Tenun Ikat NTT bukan hanya sebagai produk tekstil, melainkan juga sebagai penjaga identitas budaya dan warisan nenek moyang.
            
            Kain Tenun Ikat NTT menjadi simbol kekayaan seni dan kebudayaan NTT yang perlu dijaga dan dilestarikan. Setiap kain adalah bukti keterampilan tangan dan ketekunan pengrajin dalam melestarikan tradisi warisan budaya, serta sebagai medium untuk mempertahankan kekayaan dan keindahan warisan nenek moyang bagi generasi mendatang.',
            'image' => 'product-12.jpg',
            'price' => 20,
        ]);

        Product::create([
            'name' => 'Kain Ulap Doyo',
            'kode_product' => 'ks-11',
            'category_id' => 2,
            'description' => 'Pulau Kalimantan memiliki kekayaan budaya berupa berbagai jenis tekstil tradisional yang menyimpan keunikan dan kekhasan tersendiri. Salah satu produk tekstil tradisional tersebut adalah tenun ulap doyo. Kain tenun ini menjadi semacam identitas bagi Suku Dayak Benuaq yang mendiami sebagian wilayah Kalimantan Timur. Bahan baku, proses pembuatan, dan motif yang spesifik dari tenun ini menjadi warisan budaya tak ternilai dari masyarakat Dayak Benuaq.

            Ulap doyo merupakan jenis tenun ikat berbahan serat daun doyo (Curliglia latifolia). Daun ini berasal dari tanaman sejenis pandan yang berserat kuat dan tumbuh secara liar di pedalaman Kalimantan, salah satunya di wilayah Tanjung Isuy, Jempang, Kutai Barat.',
            'image' => 'product-11.jpg',
            'price' => 24,
        ]);

        Product::create([
            'name' => 'Kain Gringsing Tenganan',
            'kode_product' => 'ks-10',
            'category_id' => 2,
            'description' => 'Kain Gringsing Tenganan adalah kain tradisional yang berasal dari desa Tenganan, yang terletak di Kabupaten Karangasem, Bali, Indonesia. Kain ini dikenal dengan keunikan pola gringsingnya, yang dirajut secara tradisional dengan menggunakan teknik khas yang telah diwariskan turun temurun.

                            Motif gringsing pada kain ini biasanya terdiri dari pola-pola geometris yang kompleks dan simetris. Proses pembuatannya melibatkan penggunaan benang yang diikat dan diwarnai secara manual sebelum dirajut, menciptakan pola-pola yang sangat terinci dan khas. Keunikan kain Gringsing Tenganan tidak hanya terletak pada desainnya, tetapi juga pada filosofi dan nilai-nilai budaya yang terkandung dalam setiap motif.

                            Pembuatan Kain Gringsing Tenganan merupakan kegiatan kolaboratif di masyarakat Tenganan. Proses ini tidak hanya menjadi cara untuk menghasilkan pakaian dan kain hias, tetapi juga sebagai upaya melestarikan tradisi dan budaya yang telah ada selama berabad-abad.

                            Kain Gringsing Tenganan tidak hanya menjadi lambang keindahan seni tekstil Bali, tetapi juga merupakan bagian integral dari identitas budaya masyarakat Tenganan. Sebagai salah satu warisan budaya yang perlu dilestarikan, kain Gringsing Tenganan mewakili keterampilan tinggi dan keindahan tradisional yang patut dihargai oleh generasi mendatang.',
            'image' => 'product-10.jpg',
            'price' => 24,
        ]);
    }
}
