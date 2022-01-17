Post::create([
'title'=>'Judul kedua',
'category_id' => 2,
'slug' =>'judul-kedua',
'excerpt'=>'Lorem ipsum kedua',
'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, cumque! Fuga deleniti dolor nostrum, nihil corporis rem quia aperiam, accusamus natus quisquam illum veritatis dolorum? Commodi nesciunt non quo temporibus?.</p>
<p> Accusamus voluptate illum eos dolorum ratione repellat consequatur vel voluptatum velit, non maxime cumque nostrum architecto, molestias dicta rem placeat mollitia labore deleniti harum aperiam minus? Ad porro voluptas harum? Ut mollitia distinctio commodi tenetur aliquam consectetur eius?.</p>
<p>Recusandae architecto nesciunt quia inventore quibusdam. Sapiente inventore obcaecati voluptate quasi placeat vitae, quia amet animi ex fugit omnis ab illum quae in laboriosam consequatur incidunt magni, eius pariatur excepturi mollitia rem?</p>'
])

Contributor::create([
'title'=>'Contributors',
'nama'=>'Aris Setiawan',
'tempat_lahir'=>'Malang',
'tanggal_lahir'=>'27-04-1995',
'foto'=>'aris.jpg'
])


Category::create([
'name'=>'Personal',
'slug'=>'personal'
])