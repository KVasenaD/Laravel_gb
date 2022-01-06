<?php

namespace App\Http\Controllers;
use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function categoryNews(): array
	{
		$category = [
			['id' => 'politics','title' => 'Политика'],
			['id' => 'society','title' => 'Общество'],
			['id' => 'sport','title' => 'Спорт'],
			['id' => 'economics','title' => 'Экономика'],
			['id' => 'culture','title' => 'Культура'],
		 ];
	

		return $category;
	}

    public function getNewsByIdCategory($id): array
	{
		$faker = Factory::create();

		$news = [];

		for($i = 0; $i < 5; $i++) {
			$news[] = [
				'id'    => $i,
				'title' => $faker->jobTitle(),
				'category' => $id,
				'description' => $faker->text(250),
				'author' => $faker->userName()
 			];
		}

		return $news;
	}

    public function getNewsById(int $id): array
	{
		$faker = Factory::create();

		return [
			'id'    => $id,
			'title' => $faker->jobTitle(),
			'description' => $faker->text(250),
			'author' => $faker->userName()
		];
	}

    
}
