<?php

namespace App\Repositories;

use App\Models\Ward;
use App\Repositories\BaseRepository;
use DB;
class WardRepository extends BaseRepository
{
    /**
     * @return Ward
     */
    public function getModelClass()
    {
        return Ward::class;
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
            case 'district_id':
                return $query->where($column,$data);
                break;
            default:
                return $query;
                break;
        }
    }
}