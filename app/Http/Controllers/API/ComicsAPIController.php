<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateComicsAPIRequest;
use App\Http\Requests\API\UpdateComicsAPIRequest;
use App\Models\Comics;
use App\Repositories\ComicsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ComicsController
 * @package App\Http\Controllers\API
 */

class ComicsAPIController extends AppBaseController
{
    /** @var  ComicsRepository */
    private $comicsRepository;

    public function __construct(ComicsRepository $comicsRepo)
    {
        $this->comicsRepository = $comicsRepo;
    }

    /**
     * Display a listing of the Comics.
     * GET|HEAD /comics
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $comics = $this->comicsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($comics->toArray(), 'Comics retrieved successfully');
    }

    /**
     * Store a newly created Comics in storage.
     * POST /comics
     *
     * @param CreateComicsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateComicsAPIRequest $request)
    {
        $input = $request->all();

        $comics = $this->comicsRepository->create($input);

        return $this->sendResponse($comics->toArray(), 'Comics saved successfully');
    }

    /**
     * Display the specified Comics.
     * GET|HEAD /comics/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Comics $comics */
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            return $this->sendError('Comics not found');
        }

        return $this->sendResponse($comics->toArray(), 'Comics retrieved successfully');
    }

    /**
     * Update the specified Comics in storage.
     * PUT/PATCH /comics/{id}
     *
     * @param int $id
     * @param UpdateComicsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComicsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Comics $comics */
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            return $this->sendError('Comics not found');
        }

        $comics = $this->comicsRepository->update($input, $id);

        return $this->sendResponse($comics->toArray(), 'Comics updated successfully');
    }

    /**
     * Remove the specified Comics from storage.
     * DELETE /comics/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Comics $comics */
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            return $this->sendError('Comics not found');
        }

        $comics->delete();

        return $this->sendResponse($id, 'Comics deleted successfully');
    }
}
