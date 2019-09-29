<?php

namespace App\Repositories;

use App\Models\Cat;
use App\Repositories\BaseRepository;

/**
 * Class CatRepository
 * @package App\Repositories
 * @version September 29, 2019, 9:48 am UTC
*/

class CatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Cat::class;
    }
}
