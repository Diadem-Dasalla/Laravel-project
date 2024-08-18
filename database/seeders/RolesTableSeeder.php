public function run()
{
    DB::table('roles')->insert([
        ['name' => 'Admin'],
        ['name' => 'Author'],
        ['name' => 'User'],
    ]);
}
