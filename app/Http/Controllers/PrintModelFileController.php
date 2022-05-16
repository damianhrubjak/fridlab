<?php

namespace App\Http\Controllers;

use App\Models\PrintModel;
use Illuminate\Http\Request;

class PrintModelFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PrintModel $printModel)
    {
        $printModel->load('files');
        $fileGroups = $printModel->files->groupBy('pivot.type');

        return view('admin.pages.print-model-files', compact('fileGroups', 'printModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PrintModel $printModel)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrintModel $printModel, Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrintModel $printModel, Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrintModel $printModel, $id)
    {
        //
    }
}
