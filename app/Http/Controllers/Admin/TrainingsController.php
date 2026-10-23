<?php

namespace App\Http\Controllers\Admin;

use App\Training;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainingsController extends Controller
{
    public function index()
    {
        return view('admin.trainings.index', ['trainings' => Training::with('dates')->get()]);
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        DB::transaction(function () use ($request, $data) {
            $training = Training::create($this->attributes($request, $data));
            $this->saveDate($training, $data);
        });

        return back()->with('success', 'Sikeresen felvetted az új eseményt!');
    }

    public function edit($id)
    {
        return view('admin.trainings.edit', ['training' => Training::with('dates')->findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $training = Training::findOrFail($id);
        $data = $this->validatedData($request);
        DB::transaction(function () use ($training, $request, $data) {
            $training->update($this->attributes($request, $data));
            $this->saveDate($training, $data);
        });

        return redirect('admin/esemenyek')->with('success', 'Sikeresen szerkesztetted az eseményt!');
    }

    public function destroy($id)
    {
        $training = Training::findOrFail($id);
        DB::transaction(function () use ($training) {
            $training->dates()->delete();
            $training->delete();
        });

        return back()->with('success', 'Sikeresen törölted az eseményt!');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:255',
            'locale' => 'required|string|max:255',
            'price' => 'nullable|string|max:255',
            'max_person' => 'nullable|string|max:255',
            'image_path' => 'nullable|image|max:5120',
            'started_at' => 'nullable|required_with:hour|date',
            'hour' => ['nullable', 'required_with:started_at', 'regex:/^([01][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/'],
        ]);
    }

    private function attributes(Request $request, array $data): array
    {
        unset($data['started_at'], $data['hour'], $data['image_path']);
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('images/trainings', 'public');
        }

        return $data;
    }

    private function saveDate(Training $training, array $data): void
    {
        if (! empty($data['started_at']) && ! empty($data['hour'])) {
            $date = $training->dates()->oldest('id')->first();
            $attributes = ['started_at' => $data['started_at'], 'hour' => $data['hour']];
            $date ? $date->update($attributes) : $training->dates()->create($attributes);
        }
    }
}
