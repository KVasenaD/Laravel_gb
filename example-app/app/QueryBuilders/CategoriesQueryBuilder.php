<?php

declare(strict_types=1);

namespace App\QueryBuilders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;


class CategoriesQueryBuilder
{
    public function getModel(): Builder
    {
        return Category::query();
    }

    public function getOtherCategories(int $id)
    {
        return $this->getModel()->find($id);
    }
}

