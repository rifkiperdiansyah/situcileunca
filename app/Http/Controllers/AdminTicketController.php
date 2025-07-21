<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function index()
    {
        return view('dashboard-admin.tickets.index', [
            'tickets' => Tiket::all()
        ]);
    }

    public function create()
    {
        return view('dashboard-admin.tickets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        Tiket::create($validated);

        return redirect()->route('tickets.index')->with('success', 'Tiket berhasil dibuat!');
    }

    public function edit($id)
    {
        $ticket = Tiket::findOrFail($id);
        return view('dashboard-admin.tickets.edit', compact('ticket'));
    }

    public function update(Request $request, $id)
    {
        $ticket = Tiket::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $ticket->update($request->only('name', 'price', 'description'));

        return redirect()->route('tickets.index')->with('success', 'Tiket berhasil diperbarui.');
    }

    public function destroy(Tiket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
    }
}
