<?php

namespace Tests\Feature;
use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNewsAdminCreated()
    {
        $category = Category::factory()->create();
        $responseData = News::factory()->definition();
        $responseData = $responseData + ['category_id' => $category->id];

        $response = $this->post(route('admin.news.store'), $responseData);
        //$response->assertJson($responseData);
        $response->assertStatus(302);
    }
    public function testCategoriesSportAvailable()
    {
        $response = $this->get('/categories/sport');

        $response->assertStatus(200);
    }

    public function testNewsShow()
    {
        $response = $this->get(route('news.show', ['id' => mt_rand(1, 10)]));

        $response->assertStatus(200);
    }

    public function testNewsAdminAvailable()
    {
        $response = $this->get(route('admin.news.index'));

        $response->assertStatus(200);
    }

    public function testNewsCreateAdminAvailable()
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }

    public function testSendFeedback()
    {
        $response = $this->get(route('feedback.create'));

        $response->assertStatus(200);
    }
    public function testSendOrder()
    {
        $response = $this->get(route('order.create'));

        $response->assertStatus(200);
    }

    public function testFeedbackAvailable()
    {
        $response = $this->get(route('feedback.index'));

        $response->assertStatus(200);
    }

    public function testOrderAvailable()
    {
        $response = $this->get(route('order.index'));

        $response->assertStatus(200);
    }

    public function testNewsCategoriesAvailable()
    {
        $response = $this->get(route('news.categories'));

        $response->assertStatus(200);
    }
    public function testRedirect()
    {
        $response = $this->get(route('order.store'));

        $response->assertSee('Сделать заказ');
        $response->assertStatus(200);
    }
}
