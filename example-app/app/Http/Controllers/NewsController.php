<?php declare(strict_types=1);

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{


	public function show($id)
	{
        $model = new News();
		$news = $model->getNewsByIdCategory($id);

		return view('news.show', [
			'newsList' => $news
		]);
	}


	public function index(int $id)
	{
        $model = new News();
        $news = $model->getNewsById($id);

		return view('news.index', [
			'news' => $news
		]);
	}
}
