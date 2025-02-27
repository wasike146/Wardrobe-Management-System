<?php

namespace App\Http\Controllers;
use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    public function index()
    {
        return ClothingItem::where('user_id', auth()->id())->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|string',
        ]);

        $clothingItem = ClothingItem::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'image_url' => $request->image_url,
        ]);

        return response()->json($clothingItem, 201);
    }

    public function update(Request $request, ClothingItem $clothingItem)
    {
        $this->authorize('update', $clothingItem);

        $request->validate([
            'name' => 'sometimes|string',
            'category' => 'sometimes|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|string',
        ]);

        $clothingItem->update($request->all());
        return response()->json($clothingItem);
    }

    public function destroy(ClothingItem $clothingItem)
    {
        $this->authorize('delete', $clothingItem);
        $clothingItem->delete();
        return response()->json(null, 204);
    }
}