<?php

namespace App\Contract\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface EloquentRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param $id
     * @return Model
     */
    public function find($id): ?Model;

    /**
     * @param array $data
     * @param $id
     * @return Model
     */
    public function update(array $data, $id): Model;

    /**
     * @param $id
     * @return int
     */
    public function delete($id): int;

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);
}
