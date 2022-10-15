<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;


class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'todo_value' => 'テスト1'
        ];
        Todo::create($param);

        $param = [
            'todo_value' => 'テスト2'
        ];
        Todo::create($param);

        $param =[
            'todo_value' => 'テスト3'
        ];
        Todo::create($param);
        //
    }
}
