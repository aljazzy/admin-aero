<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Repositories\PesananRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use GuzzleHttp\Client;

class PesananController extends AppBaseController
{
    /** @var  PesananRepository */
    private $pesananRepository;

    public function __construct(PesananRepository $pesananRepo)
    {
        $this->pesananRepository = $pesananRepo;
    }

    /**
     * Display a listing of the Pesanan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pesananRepository->pushCriteria(new RequestCriteria($request));
        $pesanans = $this->pesananRepository->all();



        return view('pesanans.index')
            ->with('pesanans', $pesanans);
    }

    /**
     * Show the form for creating a new Pesanan.
     *
     * @return Response
     */
    public function create()
    {
        return view('pesanans.create');
    }

    /**
     * Store a newly created Pesanan in storage.
     *
     * @param CreatePesananRequest $request
     *
     * @return Response
     */
    public function store(CreatePesananRequest $request)
    {
        $input = $request->all();

        $pesanan = $this->pesananRepository->create($input);

        Flash::success('Pesanan saved successfully.');

        return redirect(route('pesanans.index'));
    }

    /**
     * Display the specified Pesanan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pesanan = $this->pesananRepository->findWithoutFail($id);

        if (empty($pesanan)) {
            Flash::error('Pesanan not found');

            return redirect(route('pesanans.index'));
        }

        return view('pesanans.show')->with('pesanan', $pesanan);
    }

    /**
     * Show the form for editing the specified Pesanan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pesanan = $this->pesananRepository->findWithoutFail($id);

        if (empty($pesanan)) {
            Flash::error('Pesanan not found');

            return redirect(route('pesanans.index'));
        }

        return view('pesanans.edit')->with('pesanan', $pesanan);
    }

    /**
     * Update the specified Pesanan in storage.
     *
     * @param  int              $id
     * @param UpdatePesananRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePesananRequest $request)
    {
        $pesanan = $this->pesananRepository->findWithoutFail($id);

        if (empty($pesanan)) {
            Flash::error('Pesanan not found');

            return redirect(route('pesanans.index'));
        }

        $pesanan = $this->pesananRepository->update($request->all(), $id);

        Flash::success('Pesanan updated successfully.');

        return redirect(route('pesanans.index'));
    }

    /**
     * Remove the specified Pesanan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pesanan = $this->pesananRepository->findWithoutFail($id);

        if (empty($pesanan)) {
            Flash::error('Pesanan not found');

            return redirect(route('pesanans.index'));
        }

        $this->pesananRepository->delete($id);

        Flash::success('Pesanan deleted successfully.');

        return redirect(route('pesanans.index'));
    }
}
