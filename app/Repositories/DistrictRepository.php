<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\BaseRepository;
use DB;
class DistrictRepository extends BaseRepository
{
    /**
     * @return District
     */
    public function getModelClass()
    {
        return District::class;
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
            case 'level':
                return $query->where($column, 'like', '%'.$data.'%');
                break;
            default:
                return $query;
                break;
        }
    }
}