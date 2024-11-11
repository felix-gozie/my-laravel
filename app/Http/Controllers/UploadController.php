<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
{
    // Validate file
    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', // Adjust file types and max size as needed
    ]);

    // Store file
    if ($request->file('file')) {
        $fileName = time().'_'.$request->file('file')->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        return back()->with('success', 'File uploaded successfully')->with('file', $fileName);
    }

    return back()->withErrors(['file' => 'Please upload a valid file.']);
}
}
