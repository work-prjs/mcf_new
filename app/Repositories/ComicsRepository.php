<?php

namespace App\Repositories;

use App\Models\Comics;
use App\Repositories\BaseRepository;

/**
 * Class ComicsRepository
 * @package App\Repositories
 * @version September 28, 2019, 4:25 pm UTC
*/

class ComicsRepository extends BaseRepository
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
        return Comics::class;
    }
}
