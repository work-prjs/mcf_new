<?php

namespace App\Repositories;

use App\Models\project;
use App\Repositories\BaseRepository;

/**
 * Class projectRepository
 * @package App\Repositories
 * @version October 2, 2019, 9:36 pm UTC
*/

class projectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc'
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
        return project::class;
    }
}
