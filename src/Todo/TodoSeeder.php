<?php namespace Pyro\TodosModule\Todo;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Anomaly\Streams\Platform\Model\Todos\TodosTodosEntryModel;
use Illuminate\Support\Facades\DB;
use Pyro\TodosModule\Todo\Contract\TodoRepositoryInterface;

class TodoSeeder extends Seeder
{

    /**
     * Run the seeder.
     * @return void
     */
    public function run()
    {
        $repository = new EntryRepository();
        $repository->setModel(new TodosTodosEntryModel());
       // $this->todo->newQuery()->create();

//       $id =  DB::table("default_todos_todos")->insert([
//            'user_id_id'=> 2,
//        ]);
//        DB::table("default_todos_todos")->insert([
//            'ENTRY_İD'=>$id,
//            'name'=> "aa ",
//            'locale'=> "tr",
//        ]);
        $repository->create(
            [
                'en' => [
                    'name' => 'SeederDeneme',
                ],
                'user_id_id' => 1,
            ]
        );
    }
}
