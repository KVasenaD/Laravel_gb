<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

	public function categories()
	{
        $category= $this->categoryNews();

		return view('news.categories', [
			'category' => $category
		]);
	}

	public function show($id)
	{
		
		$news = $this->getNewsByIdCategory($id);

		return view('news.show', [
			'news' => $news
		]);
	}


	public function index(int $id)
	{
		$news = $this->getNewsById($id);

		return view('news.index', [
			'newsItem' => $news
		]);
	}
}