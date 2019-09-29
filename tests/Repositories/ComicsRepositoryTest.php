<?php namespace Tests\Repositories;

use App\Models\Comics;
use App\Repositories\ComicsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ComicsRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ComicsRepository
     */
    protected $comicsRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->comicsRepo = \App::make(ComicsRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_comics()
    {
        $comics = factory(Comics::class)->make()->toArray();

        $createdComics = $this->comicsRepo->create($comics);

        $createdComics = $createdComics->toArray();
        $this->assertArrayHasKey('id', $createdComics);
        $this->assertNotNull($createdComics['id'], 'Created Comics must have id specified');
        $this->assertNotNull(Comics::find($createdComics['id']), 'Comics with given id must be in DB');
        $this->assertModelData($comics, $createdComics);
    }

    /**
     * @test read
     */
    public function test_read_comics()
    {
        $comics = factory(Comics::class)->create();

        $dbComics = $this->comicsRepo->find($comics->id);

        $dbComics = $dbComics->toArray();
        $this->assertModelData($comics->toArray(), $dbComics);
    }

    /**
     * @test update
     */
    public function test_update_comics()
    {
        $comics = factory(Comics::class)->create();
        $fakeComics = factory(Comics::class)->make()->toArray();

        $updatedComics = $this->comicsRepo->update($fakeComics, $comics->id);

        $this->assertModelData($fakeComics, $updatedComics->toArray());
        $dbComics = $this->comicsRepo->find($comics->id);
        $this->assertModelData($fakeComics, $dbComics->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_comics()
    {
        $comics = factory(Comics::class)->create();

        $resp = $this->comicsRepo->delete($comics->id);

        $this->assertTrue($resp);
        $this->assertNull(Comics::find($comics->id), 'Comics should not exist in DB');
    }
}
