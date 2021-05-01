<?php

namespace App\Repositories;

use App\Models\Province;
use App\Repositories\BaseRepository;
use DB;
class ProvinceRepository extends BaseRepository
{
    /**
     * @return Province
     */
    public function getModelClass()
    {
        return Province::class;
    }

    /**
     * @param mixed $query
     * @param mixed $column
     * @param mixed $data
     *
     * @return Query
     */
    public function search($query, $column, $data)
    {
        switch ($column) {
            case 'name':
                return $query->where($column, 'like', '%'.$data.'%');
                break;
            default:
                return $query;
                break;
        }
    }
}