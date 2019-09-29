<?php

namespace App\Http\Controllers;

use App\DataTables\ComicsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use App\Repositories\ComicsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ComicsController extends AppBaseController
{
    /** @var  ComicsRepository */
    private $comicsRepository;

    public function __construct(ComicsRepository $comicsRepo)
    {
        $this->comicsRepository = $comicsRepo;
    }

    /**
     * Display a listing of the Comics.
     *
     * @param ComicsDataTable $comicsDataTable
     * @return Response
     */
    public function index(ComicsDataTable $comicsDataTable)
    {
        return $comicsDataTable->render('comics.index');
    }

    /**
     * Show the form for creating a new Comics.
     *
     * @return Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created Comics in storage.
     *
     * @param CreateComicsRequest $request
     *
     * @return Response
     */
    public function store(CreateComicsRequest $request)
    {
        $input = $request->all();

        $comics = $this->comicsRepository->create($input);

        Flash::success('Comics saved successfully.');

        return redirect(route('comics.index'));
    }

    /**
     * Display the specified Comics.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            Flash::error('Comics not found');

            return redirect(route('comics.index'));
        }

        return view('comics.show')->with('comics', $comics);
    }

    /**
     * Show the form for editing the specified Comics.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            Flash::error('Comics not found');

            return redirect(route('comics.index'));
        }

        return view('comics.edit')->with('comics', $comics);
    }

    /**
     * Update the specified Comics in storage.
     *
     * @param  int              $id
     * @param UpdateComicsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComicsRequest $request)
    {
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            Flash::error('Comics not found');

            return redirect(route('comics.index'));
        }

        $comics = $this->comicsRepository->update($request->all(), $id);

        Flash::success('Comics updated successfully.');

        return redirect(route('comics.index'));
    }

    /**
     * Remove the specified Comics from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comics = $this->comicsRepository->find($id);

        if (empty($comics)) {
            Flash::error('Comics not found');

            return redirect(route('comics.index'));
        }

        $this->comicsRepository->delete($id);

        Flash::success('Comics deleted successfully.');

        return redirect(route('comics.index'));
    }
}
