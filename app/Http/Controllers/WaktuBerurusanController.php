<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaktuBerurusanController extends Controller
{
    public function index()
    {
        // Logic to display business hours
        return view('admin.waktu-berurusan.index');
    }

    public function create()
    {
        // Logic to show form to create new business hours
        return view('admin.waktu-berurusan.create');
    }

    public function store(Request $request)
    {
        // Logic to store new business hours
        // Validate and save the data
        return redirect()->route('admin.waktu-berurusan.index');
    }

    public function edit($id)
    {
        // Logic to show form to edit existing business hours
        return view('admin.waktu-berurusan.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update existing business hours
        // Validate and update the data
        return redirect()->route('admin.waktu-berurusan.index');
    }

    public function delete($id)
    {
        // Logic to delete existing business hours
        return redirect()->route('admin.waktu-berurusan.index');
    }
}
