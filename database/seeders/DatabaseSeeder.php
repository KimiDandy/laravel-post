<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Kimi Dandy',
            'username'=>'kimidandy',
            'email'=>'kimidandy2004@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ])
        ;

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ratione deleniti cum architecto eius earum blanditiis',
        //     'body'=>'<p></p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloribus voluptatem voluptate atque totam autem adipisci ut ipsum distinctio magni, dicta temporibus porro veritatis nisi eveniet quisquam praesentium unde dolor obcaecati iure mollitia modi. Neque obcaecati incidunt provident ut laudantium at quibusdam veritatis ullam cum.</p> <p>Saepe harum voluptas totam eligendi fugiat officiis aliquam soluta! Officiis asperiores reiciendis magnam nobis impedit earum dolorum, architecto obcaecati. Consectetur neque excepturi et quidem deleniti adipisci ullam quasi sapiente! Enim, ea nam atque nisi distinctio voluptatibus reprehenderit et eveniet iusto nihil alias quod, sapiente voluptas incidunt eum! Consectetur cum dolorem maiores! Fuga voluptate ducimus aspernatur alias sunt libero reiciendis cum amet deserunt perspiciatis tempora consequatur sed corporis, ab dolor. Enim ut nostrum amet sequi, quisquam, sit facere harum magni a,</p> <p>illum rem mollitia inventore. Aliquid cupiditate, unde magnam laudantium magni illo eos excepturi, error pariatur sapiente expedita non debitis velit rem sunt eum, aspernatur tempora?',
        //     'category_id'=>1,
        //     'user_id'=>1 
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ratione deleniti cum architecto eius earum blanditiis',
        //     'body'=>'<p></p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloribus voluptatem voluptate atque totam autem adipisci ut ipsum distinctio magni, dicta temporibus porro veritatis nisi eveniet quisquam praesentium unde dolor obcaecati iure mollitia modi. Neque obcaecati incidunt provident ut laudantium at quibusdam veritatis ullam cum.</p> <p>Saepe harum voluptas totam eligendi fugiat officiis aliquam soluta! Officiis asperiores reiciendis magnam nobis impedit earum dolorum, architecto obcaecati. Consectetur neque excepturi et quidem deleniti adipisci ullam quasi sapiente! Enim, ea nam atque nisi distinctio voluptatibus reprehenderit et eveniet iusto nihil alias quod, sapiente voluptas incidunt eum! Consectetur cum dolorem maiores! Fuga voluptate ducimus aspernatur alias sunt libero reiciendis cum amet deserunt perspiciatis tempora consequatur sed corporis, ab dolor. Enim ut nostrum amet sequi, quisquam, sit facere harum magni a,</p> <p>illum rem mollitia inventore. Aliquid cupiditate, unde magnam laudantium magni illo eos excepturi, error pariatur sapiente expedita non debitis velit rem sunt eum, aspernatur tempora?',
        //     'category_id'=>1,
        //     'user_id'=>1 
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ratione deleniti cum architecto eius earum blanditiis',
        //     'body'=>'<p></p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloribus voluptatem voluptate atque totam autem adipisci ut ipsum distinctio magni, dicta temporibus porro veritatis nisi eveniet quisquam praesentium unde dolor obcaecati iure mollitia modi. Neque obcaecati incidunt provident ut laudantium at quibusdam veritatis ullam cum.</p> <p>Saepe harum voluptas totam eligendi fugiat officiis aliquam soluta! Officiis asperiores reiciendis magnam nobis impedit earum dolorum, architecto obcaecati. Consectetur neque excepturi et quidem deleniti adipisci ullam quasi sapiente! Enim, ea nam atque nisi distinctio voluptatibus reprehenderit et eveniet iusto nihil alias quod, sapiente voluptas incidunt eum! Consectetur cum dolorem maiores! Fuga voluptate ducimus aspernatur alias sunt libero reiciendis cum amet deserunt perspiciatis tempora consequatur sed corporis, ab dolor. Enim ut nostrum amet sequi, quisquam, sit facere harum magni a,</p> <p>illum rem mollitia inventore. Aliquid cupiditate, unde magnam laudantium magni illo eos excepturi, error pariatur sapiente expedita non debitis velit rem sunt eum, aspernatur tempora?',
        //     'category_id'=>2,
        //     'user_id'=>1 
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ratione deleniti cum architecto eius earum blanditiis',
        //     'body'=>'<p></p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste doloribus voluptatem voluptate atque totam autem adipisci ut ipsum distinctio magni, dicta temporibus porro veritatis nisi eveniet quisquam praesentium unde dolor obcaecati iure mollitia modi. Neque obcaecati incidunt provident ut laudantium at quibusdam veritatis ullam cum.</p> <p>Saepe harum voluptas totam eligendi fugiat officiis aliquam soluta! Officiis asperiores reiciendis magnam nobis impedit earum dolorum, architecto obcaecati. Consectetur neque excepturi et quidem deleniti adipisci ullam quasi sapiente! Enim, ea nam atque nisi distinctio voluptatibus reprehenderit et eveniet iusto nihil alias quod, sapiente voluptas incidunt eum! Consectetur cum dolorem maiores! Fuga voluptate ducimus aspernatur alias sunt libero reiciendis cum amet deserunt perspiciatis tempora consequatur sed corporis, ab dolor. Enim ut nostrum amet sequi, quisquam, sit facere harum magni a,</p> <p>illum rem mollitia inventore. Aliquid cupiditate, unde magnam laudantium magni illo eos excepturi, error pariatur sapiente expedita non debitis velit rem sunt eum, aspernatur tempora?',
        //     'category_id'=>2,
        //     'user_id'=>2 
        // ]);
    }
}
