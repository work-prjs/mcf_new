<?php

namespace App\Repositories;

use App\Models\task;
use App\Repositories\BaseRepository;

/**
 * Class taskRepository
 * @package App\Repositories
 * @version October 2, 2019, 9:41 pm UTC
*/

class taskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'parent_id',
        'user_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return task::class;
    }
}
