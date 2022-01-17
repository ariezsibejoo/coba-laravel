<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Aris Setiawan',
            'username' => 'ariezsibejoo',
            'email' => 'ariezsibejoo@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Bejo Sujojo',
        //     'email' => 'jojo@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga, repellendus est beatae nam rem libero, nihil at iusto ut nostrum magnam excepturi in optio nobis consectetur voluptatem corrupti facilis quidem blanditiis. Delectus natus repellat, quas ullam sint vitae voluptatibus architecto minus, nobis adipisci praesentium exercitationem blanditiis aliquam! Cupiditate, rem voluptatibus nisi qui placeat nobis aspernatur vero aperiam rerum minima excepturi reprehenderit, repudiandae labore doloremque nesciunt eos maiores distinctio cumque. Non facere quaerat deleniti eaque, recusandae quos voluptas magnam aspernatur quam tempore. Unde ullam error sed tenetur facere. Tempora veniam corrupti adipisci commodi maiores, atque eum at.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga, repellendus est beatae nam rem libero, nihil at iusto ut nostrum magnam excepturi in optio nobis consectetur voluptatem corrupti facilis quidem blanditiis. Delectus natus repellat, quas ullam sint vitae voluptatibus architecto minus, nobis adipisci praesentium exercitationem blanditiis aliquam! Cupiditate, rem voluptatibus nisi qui placeat nobis aspernatur vero aperiam rerum minima excepturi reprehenderit, repudiandae labore doloremque nesciunt eos maiores distinctio cumque. Non facere quaerat deleniti eaque, recusandae quos voluptas magnam aspernatur quam tempore. Unde ullam error sed tenetur facere. Tempora veniam corrupti adipisci commodi maiores, atque eum at.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga, repellendus est beatae nam rem libero, nihil at iusto ut nostrum magnam excepturi in optio nobis consectetur voluptatem corrupti facilis quidem blanditiis. Delectus natus repellat, quas ullam sint vitae voluptatibus architecto minus, nobis adipisci praesentium exercitationem blanditiis aliquam! Cupiditate, rem voluptatibus nisi qui placeat nobis aspernatur vero aperiam rerum minima excepturi reprehenderit, repudiandae labore doloremque nesciunt eos maiores distinctio cumque. Non facere quaerat deleniti eaque, recusandae quos voluptas magnam aspernatur quam tempore. Unde ullam error sed tenetur facere. Tempora veniam corrupti adipisci commodi maiores, atque eum at.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui aliquam quam, fuga, repellendus est beatae nam rem libero, nihil at iusto ut nostrum magnam excepturi in optio nobis consectetur voluptatem corrupti facilis quidem blanditiis. Delectus natus repellat, quas ullam sint vitae voluptatibus architecto minus, nobis adipisci praesentium exercitationem blanditiis aliquam! Cupiditate, rem voluptatibus nisi qui placeat nobis aspernatur vero aperiam rerum minima excepturi reprehenderit, repudiandae labore doloremque nesciunt eos maiores distinctio cumque. Non facere quaerat deleniti eaque, recusandae quos voluptas magnam aspernatur quam tempore. Unde ullam error sed tenetur facere. Tempora veniam corrupti adipisci commodi maiores, atque eum at.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
