<?php declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $model = new Category();
        $category= $model->categoryNews();

        return view('news.categories', [
            'category' => $category
        ]);
    }
}

