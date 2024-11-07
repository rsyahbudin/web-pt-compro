<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrincipleRequest;
use App\Http\Requests\UpdatePrincipleRequest;
use App\Models\OurPrinciple;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurPrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $principles = OurPrinciple::orderByDesc('id')->paginate(20);
        return view ('admin.principles.index', compact('principles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.principles.create'); 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrincipleRequest $request)
    {
        //
        DB::transaction(function () use ($request) {
            // Validate the request data
            $validated = $request->validated();
        
            // Handle icon file upload if it exists
            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath; // Store the path in validated data
            }
        
            // Handle thumbnail file upload if it exists
            if ($request->hasFile('thumbnail')) {
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
                $validated['thumbnail'] = $thumbnailPath; // Store the path in validated data
            }
        
            // Create a new principle with validated data
            $newPrinciple = OurPrinciple::create($validated);
        
            // If there are keypoints, associate them with the new principle
            if (!empty($validated['keypoints'])) {
                foreach ($validated['keypoints'] as $keypoint) {
                    $newPrinciple->keypoints()->create([
                        'keypoint' => $keypoint['keypoint'], // Assuming keypoint is an array with 'keypoint' field
                        'manufacture' => $keypoint['manufacture'], // Add the 'manufacture' field
                        'our_principle_id' => $newPrinciple->id // Ensure the foreign key is set
                    ]);
                }
            }
        });

        return redirect()->route('admin.principles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurPrinciple $ourPrinciple)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurPrinciple $principle)
    {
        //
        return view ('admin.principles.edit', compact('principle')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrincipleRequest $request, OurPrinciple $principle)
{
    DB::transaction(function () use ($request, $principle) {
        // Validate the request data
        $validated = $request->validated();

        // Handle icon file upload if it exists
        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons', 'public');
            $validated['icon'] = $iconPath;
        }

        // Handle thumbnail file upload if it exists
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
            $validated['thumbnail'] = $thumbnailPath;
        }

        // Update the principle with validated data
        $principle->update($validated);

        // Update the keypoints
        if (!empty($validated['keypoints'])) {
            // Delete all existing keypoints before inserting new ones
            $principle->keypoints()->delete();

            // Insert new keypoints
            foreach ($validated['keypoints'] as $keypointData) {
                $principle->keypoints()->create([
                    'keypoint' => $keypointData['keypoint'], // Assuming 'keypoint' is a key in the array
                    'manufacture' => $keypointData['manufacture'], // Assuming 'manufacture' is a key in the array
                ]);
            }
        }
    });

    return redirect()->route('admin.principles.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurPrinciple $principle)
    {
        //
        DB::transaction(function () use ($principle) {
            $principle->delete();
        });
        return redirect()->route('admin.principles.index');
    }
}
