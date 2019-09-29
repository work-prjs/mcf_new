<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Comics;

class ComicsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_comics()
    {
        $comics = factory(Comics::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/comics', $comics
        );

        $this->assertApiResponse($comics);
    }

    /**
     * @test
     */
    public function test_read_comics()
    {
        $comics = factory(Comics::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/comics/'.$comics->id
        );

        $this->assertApiResponse($comics->toArray());
    }

    /**
     * @test
     */
    public function test_update_comics()
    {
        $comics = factory(Comics::class)->create();
        $editedComics = factory(Comics::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/comics/'.$comics->id,
            $editedComics
        );

        $this->assertApiResponse($editedComics);
    }

    /**
     * @test
     */
    public function test_delete_comics()
    {
        $comics = factory(Comics::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/comics/'.$comics->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/comics/'.$comics->id
        );

        $this->response->assertStatus(404);
    }
}
