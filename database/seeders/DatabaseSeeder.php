<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        // User::create([
        //     'name' => 'Kangealme',
        //     'email' => 'kangealme@gmail.com',
        //     'password' => bcrypt('1235678'),
        // ]);

        $categories = [
            [
                'name' => 'Programming',
                'slug' => 'programming'
            ],
            [
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ],
            [
                'name' => 'Personal Post',
                'slug' => 'personal-post'
            ]
        ];
        foreach($categories as $category)
        {
            Category::create($category);
        }

        Post::factory(20)->create();
        // $posts = [
        //     [
        //         'title' => 'Tulisan Pertama',
        //         'category_id' => 1,
        //         'user_id' => 1,
        //         'slug' => 'tulisan-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid provident beatae quas laboriosam iure.',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos consequuntur pariatur dignissimos minima magnam architecto! Sit saepe asperiores id vero officia debitis corrupti consectetur earum possimus? Veniam animi repellendus obcaecati? Dolorem debitis iure, vel veritatis, nisi quas in placeat id saepe vero aliquid? Magni, corrupti amet odit pariatur dolor dolores vitae repellendus accusamus beatae veritatis ullam maxime voluptas doloremque, ducimus distinctio provident nulla?</p><p> Praesentium recusandae cum vero totam mollitia odio dolores laborum nam amet illum soluta perspiciatis atque voluptate magni fugiat nobis libero at dolorum, iure fugit dolor delectus aut voluptatem. Ducimus inventore quidem, eum repellat atque perspiciatis eligendi totam excepturi dolore molestiae, sit rerum laudantium earum odio tempore nisi rem ipsam reprehenderit. Aliquam mollitia ipsum qui nemo in dignissimos suscipit ad natus. Molestias laudantium et corrupti pariatur, dolorum unde quaerat quam id reiciendis libero eos nam impedit earum! A voluptatibus similique quos eligendi provident vitae excepturi dignissimos quam impedit!</p>'
        //     ],
        //     [
        //         'title' => 'Tulisan Kedua',
        //         'category_id' => 2,
        //         'user_id' => 1,
        //         'slug' => 'tulisan-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid provident beatae quas laboriosam iure.',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos consequuntur pariatur dignissimos minima magnam architecto! Sit saepe asperiores id vero officia debitis corrupti consectetur earum possimus? Veniam animi repellendus obcaecati? Dolorem debitis iure, vel veritatis, nisi quas in placeat id saepe vero aliquid? Magni, corrupti amet odit pariatur dolor dolores vitae repellendus accusamus beatae veritatis ullam maxime voluptas doloremque, ducimus distinctio provident nulla?</p><p> Praesentium recusandae cum vero totam mollitia odio dolores laborum nam amet illum soluta perspiciatis atque voluptate magni fugiat nobis libero at dolorum, iure fugit dolor delectus aut voluptatem. Ducimus inventore quidem, eum repellat atque perspiciatis eligendi totam excepturi dolore molestiae, sit rerum laudantium earum odio tempore nisi rem ipsam reprehenderit. Aliquam mollitia ipsum qui nemo in dignissimos suscipit ad natus. Molestias laudantium et corrupti pariatur, dolorum unde quaerat quam id reiciendis libero eos nam impedit earum! A voluptatibus similique quos eligendi provident vitae excepturi dignissimos quam impedit!</p>'
        //     ],
        //     [
        //         'title' => 'Tulisan Ketiga',
        //         'category_id' => 3,
        //         'user_id' => 1,
        //         'slug' => 'tulisan-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid provident beatae quas laboriosam iure.',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos consequuntur pariatur dignissimos minima magnam architecto! Sit saepe asperiores id vero officia debitis corrupti consectetur earum possimus? Veniam animi repellendus obcaecati? Dolorem debitis iure, vel veritatis, nisi quas in placeat id saepe vero aliquid? Magni, corrupti amet odit pariatur dolor dolores vitae repellendus accusamus beatae veritatis ullam maxime voluptas doloremque, ducimus distinctio provident nulla?</p><p> Praesentium recusandae cum vero totam mollitia odio dolores laborum nam amet illum soluta perspiciatis atque voluptate magni fugiat nobis libero at dolorum, iure fugit dolor delectus aut voluptatem. Ducimus inventore quidem, eum repellat atque perspiciatis eligendi totam excepturi dolore molestiae, sit rerum laudantium earum odio tempore nisi rem ipsam reprehenderit. Aliquam mollitia ipsum qui nemo in dignissimos suscipit ad natus. Molestias laudantium et corrupti pariatur, dolorum unde quaerat quam id reiciendis libero eos nam impedit earum! A voluptatibus similique quos eligendi provident vitae excepturi dignissimos quam impedit!</p>'
        //     ],
        //     [
        //         'title' => 'Tulisan Keempat',
        //         'category_id' => 3,
        //         'user_id' => 1,
        //         'slug' => 'tulisan-keempat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid provident beatae quas laboriosam iure.',
        //         'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos consequuntur pariatur dignissimos minima magnam architecto! Sit saepe asperiores id vero officia debitis corrupti consectetur earum possimus? Veniam animi repellendus obcaecati? Dolorem debitis iure, vel veritatis, nisi quas in placeat id saepe vero aliquid? Magni, corrupti amet odit pariatur dolor dolores vitae repellendus accusamus beatae veritatis ullam maxime voluptas doloremque, ducimus distinctio provident nulla?</p><p> Praesentium recusandae cum vero totam mollitia odio dolores laborum nam amet illum soluta perspiciatis atque voluptate magni fugiat nobis libero at dolorum, iure fugit dolor delectus aut voluptatem. Ducimus inventore quidem, eum repellat atque perspiciatis eligendi totam excepturi dolore molestiae, sit rerum laudantium earum odio tempore nisi rem ipsam reprehenderit. Aliquam mollitia ipsum qui nemo in dignissimos suscipit ad natus. Molestias laudantium et corrupti pariatur, dolorum unde quaerat quam id reiciendis libero eos nam impedit earum! A voluptatibus similique quos eligendi provident vitae excepturi dignissimos quam impedit!</p>'
        //     ],
        // ];
        // foreach($posts as $post)
        // {
        //     Post::create($post);
        // }
    }
}
