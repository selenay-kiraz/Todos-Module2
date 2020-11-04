<?php namespace Pyro\TodosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\UsersModule\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pyro\TodosModule\Todo\Form\TodoFormBuilder;
use Pyro\TodosModule\Todo\Table\TodoTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Pyro\TodosModule\Todo\TodoModel;

class TodosController extends PublicController
{
    /**
     * Display an index of existing entries.
     *
     * @param TodoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodoTableBuilder $table)
    {
        $table->setViews([
            'create' => [
                'text' => 'module::field.new_todo.name',
                'href' => '/todo/create',
            ],
        ]);

        /** Edit butonunu tabloda kullanabilmek için; */
        $table->setButtons([
            'edit' => [
                'href' => 'todos/edit/' . '{entry.id}'
            ],
        ]);

        /** Delete butonunu tabloda kullanabilmek için; */
        $table->setActions([
            'delete',
        ]);

//          $table->setButtons([
//          'cancel' => [
//          'href' => 'todos/cancel/'
//          ],
//         ]);

        $table->setOption('sortable', false);

        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param TodoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(TodoFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param TodoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */

    /** Kullanıcılar */
    public function edit_todo($id)
    {
        return $this->view->make('pyro.module.todos::edit', compact('id'));
    }

    /** Güncelleme yapmak için */

    public function update($id, Request $request)
    {dd(123);

        /** $todos yerine  --> $sdkfjsdf de yazabilirdim boş projede fark etmiyor.*/

        /** TodoModelden id buldu, adını girdik, dbdeki id adını girdik user'ı çağırdık ve kaydettirdik. */
        $todo = TodoModel::find($id);
        $todo->name = $request->name;
        $todo->user_id_id = $request->user;
        $todo->all();

        /** update sayfası boş kalmasın diye back dedik. */
        return $this->redirect->back();
    }

      /** Save işlemi için */
    public function save(Request $request)
    {
        /** TodoModelden id buldu, adını girdik, dbdeki id adını girdik user'ı çağırdık ve kaydettirdik. */
        $todo = new TodoModel();
        $todo->name = $request->name;
        $todo->user_id_id = $request->user;
        $todo->save();

        /** update sayfası boş kalmasın diye back dedik. */
        return $this->redirect->back();

//         $user = User::all();
//         $user->save();
//          dd($user);
    }
}



