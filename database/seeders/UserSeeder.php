<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class UserSeeder extends Seeder
{
    public function run(){
        DB::collection('users')->delete();
        DB::collection('users')->insert([
            'id'=>'1',
            'name'=>'admin',
            'password'=>"123456",
            'email'=>'admin@gmail.com',
            'rol_id'=>1,
            'telefono'=>212665523
        ]);
    }

}

?>