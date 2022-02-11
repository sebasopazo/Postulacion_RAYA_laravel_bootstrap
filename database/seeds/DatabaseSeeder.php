<?php

use Illuminate\Database\Seeder;
use App\Admins;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserTableSeeder');
 
        $this->command->info('User table seeded!');
    }
}

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        
        // se crea un administrador con los datos email = admintest@admin.cl 
        //y contraseña = password (se crea ya hashed para que el login haga la comparacion apropiadamente)
        Admins::create(['email' => 'admintest@admin.cl','password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ]); // password es 'password'
    }
 
}