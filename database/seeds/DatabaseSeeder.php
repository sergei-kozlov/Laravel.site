<?php

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 03.08.2016
 * Time: 17:36
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
//        $this->call('RoleSeeder');
        $this->call('NoteSeeder');

    }
}


