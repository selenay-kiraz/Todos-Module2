<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PyroModuleTodosCreateTodosFields extends Migration
{

    /**
     * The addon fields.oc
     *
     * @var array
     */

    /** Todos section içerisinde bulunan sayfa table'ın olduğu yer */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'user_id' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => \Anomaly\UsersModule\User\UserModel::class,
            ],
        ],
    ];

    protected $assignments = [];


}
