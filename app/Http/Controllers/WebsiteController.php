<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ZipArchive;

class WebsiteController extends Controller
{
    public function index()
    {
        return view("websites.index");
    }
    public function upload(Request $request)
    {
        $request->validate([
            'site_zip' => 'required|file|mimes:zip|max:20480', // Maximum size 20MB, adjust as needed
        ]);

        $user = User::find(Auth::id());

        $uploadDir = public_path('user_sites/' . $user->id . '/'); // Updated directory name

        // Create the user's directory if it doesn't exist
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Handle the uploaded file
        $file = $request->file('site_zip');
        $originalName = $file->getClientOriginalName();

        // Replace spaces with underscores in the file name
        $safeFileName = str_replace(' ', '_', $originalName);
        $zipPath = $uploadDir . $safeFileName;

        // Move the uploaded ZIP file to the user's directory
        $file->move($uploadDir, $safeFileName);

        // Unzip the file
        $zip = new ZipArchive;
        if ($zip->open($zipPath) === TRUE) {
            // Extract to the user's directory
            $zip->extractTo($uploadDir);
            $zip->close();

            // Delete the ZIP file after extraction
            unlink($zipPath);

            return redirect()->back()->with('success', 'Website uploaded and extracted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to extract the ZIP file.');
        }
    }
}
