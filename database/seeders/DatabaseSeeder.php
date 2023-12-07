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
            'name' => 'Jawa Barat'
        ]);
        Category::create([
            'name' => 'Banjarmasin'
        ]);
        Category::create([
            'name' => 'Maluku'
        ]);


        Product::create([
            'name' => 'Lukisan',
            'kode_product' => 'ks-01',
            'category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eius et facilis fugiat illum ipsam iste, itaque minima nostrum provident, repudiandae vel voluptatum. Ab alias aliquam consectetur corporis cum debitis deserunt dignissimos dolor eius error fuga illum, inventore ipsa itaque minus necessitatibus nisi praesentium quae, quam rem repellat repellendus sequi sit, suscipit tenetur totam ullam!

          Accusamus asperiores consequatur consequuntur, doloremque ducimus ea, et ex fugiat fugit hic illum inventore iure magni nesciunt possimus sunt unde voluptas! Delectus deleniti dolore dolores illo ipsum modi nemo officia quia repellat vel! Beatae cumque dolore doloremque dolorum earum eius est exercitationem id inventore ipsa labore laborum magnam officia officiis porro possimus praesentium quam quos ratione repellat saepe sit tempora tempore temporibus ullam unde, veritatis.',
            'image' => 'lukisan.jpg',
            'price' => 16,
        ]);

        Product::create([
            'name' => 'botak',
            'kode_product' => 'ks-02',
            'category_id' => 2,
            "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae consectetur corporis debitis eos, quasi reiciendis suscipit tempore temporibus veniam? Accusantium aspernatur beatae blanditiis consectetur cum dolor dolore doloremque ducimus ea enim error est eum excepturi fuga fugiat illo ipsa iste molestias nemo nisi numquam officia optio possimus praesentium quas qui quidem quisquam, quos ratione recusandae rem saepe sed suscipit vel veniam veritatis voluptate. Aliquam aperiam, consequatur dolores illum itaque, laboriosam magnam molestiae numquam officiis provident sapiente sit totam, voluptatibus!",
            'image' => 'botak.jpg',
            'price' => 20,
        ]);

        Product::create([
            'name' => 'Wanita',
            'kode_product' => 'ks-03',
            'category_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem eligendi, id ipsum iusto possimus quasi quibusdam tenetur. Autem consectetur distinctio dolor ea eius enim error excepturi fugiat harum,

                illo, ipsa omnis optio placeat quasi quibusdam totam vel veniam voluptatum. Aperiam atque eos impedit iure laboriosam modi, molestias velit voluptates! Ad asperiores commodi culpa dicta eius, iste nostrum perspiciatis quae! Autem esse fuga,

                id laborum maxime, nemo neque odio pariatur quisquam ratione ullam vero vitae voluptas. Commodi debitis dicta dolorum fugit libero neque praesentium sit, vel. Aperiam earum iure libero quisquam saepe sequi temporibus. Doloremque ea laborum perferendis recusandae suscipit voluptatum.',
            'image' => 'wanita.jpg',
            'price' => 15,
        ]);
    }
}
