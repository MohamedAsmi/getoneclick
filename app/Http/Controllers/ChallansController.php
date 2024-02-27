<?php

namespace App\Http\Controllers;

use App\Http\Helper\Services\ChallanceService;
use App\Models\Challans;
use App\Http\Requests\StoreChallansRequest;
use App\Http\Requests\UpdateChallansRequest;
use Yajra\DataTables\DataTables;
class ChallansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $challanceService;

    public function __construct(ChallanceService $challanceService)
    {
        $this->challanceService = $challanceService;
    }

    public function index()
    {
        return view('admin.challance.index');
    }

    public function list()
    {
        $data = $this->challanceService->getData();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChallansRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Challans $challans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Challans $challans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChallansRequest $request, Challans $challans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Challans $challans)
    {
        //
    }
}
