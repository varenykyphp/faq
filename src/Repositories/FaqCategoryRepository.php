<?php

namespace VarenykyFaq\Repositories;

use VarenykyFaq\Models\Categories;
use App\Models\NameModel;
use Varenyky\Repositories\Repository;

class FaqCategoryRepository extends Repository
{
    /**
     * To initialize class objects/variable.
     *
     * @param  NameModel  $model
     */
    public function __construct(Categories $model)
    {
        $this->model = $model;
    }
}
