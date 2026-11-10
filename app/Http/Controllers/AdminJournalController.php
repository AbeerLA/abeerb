<?php

namespace App\Http\Controllers;

use App\Models\JournalEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminJournalController extends Controller
{
    // Display all journal entries
    public function index()
    {
        $entries = JournalEntry::latest()->get();

        return view('admin.journal.index', compact('entries'));
    }

    // Show create form
    public function create()
    {
        return view('admin.journal.create');
    }

    // Save new journal entry
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'date' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['required', 'string'],
            'caption' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->extension();

            $image->move(public_path('images/journals'), $imageName);

            $validated['image'] = $imageName;
        }

        JournalEntry::create($validated);

        return redirect()
            ->route('admin.journal.index')
            ->with('success', 'Journal entry added successfully!');
    }

    // Show edit form
    public function edit(JournalEntry $journal)
    {
        return view('admin.journal.edit', compact('journal'));
    }

    // Update journal entry
    public function update(Request $request, JournalEntry $journal)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'date' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['required', 'string'],
            'caption' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {

            if ($journal->image) {
                $oldImage = public_path('images/journal/' . $journal->image);

                if (File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->extension();

            $image->move(public_path('images/journals'), $imageName);

            $validated['image'] = $imageName;
        }

        $journal->update($validated);

        return redirect()
            ->route('admin.journal.index')
            ->with('success', 'Journal entry updated successfully!');
    }

    // Delete journal entry
    public function destroy(JournalEntry $journal)
    {
        if ($journal->image) {
            $imagePath = public_path('images/journals/' . $journal->image);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $journal->delete();

        return redirect()
            ->route('admin.journal.index')
            ->with('success', 'Journal entry deleted successfully!');
    }
}