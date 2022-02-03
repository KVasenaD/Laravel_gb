<?php declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Category;
use App\QueryBuilders\CategoriesQueryBuilder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(CategoriesQueryBuilder $queryBuilder)
    {
        $categories = Category::with('news')->paginate(5);

        return view('news.categories', [
            'categories' => $categories
        ]);
    }
}

