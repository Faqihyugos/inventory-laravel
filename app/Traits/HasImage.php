<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public function uploadImage($request, string $path): ?string
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $file->storeAs($path, $file->hashName(), 'public');

        return $file->hashName();
    }

    public function deleteImage(string $path, ?string $image): void
    {
        if ($image) {
            Storage::disk('public')->delete($path . '/' . $image);
        }
    }
}
