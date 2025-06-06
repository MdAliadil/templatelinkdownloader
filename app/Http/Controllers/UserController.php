<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function dashboard()
{
    $user = auth()->user(); 

    $images = File::files(public_path('images/templates'));
    $templateImages = [];

    
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

    foreach ($images as $image) {
        $extension = strtolower($image->getExtension());
        if (in_array($extension, $allowedExtensions)) {
            $templateImages[] = 'images/templates/' . $image->getFilename();
        }
    }

    return view('user.dashboard', compact('user','templateImages'));
}

    public function shareCard(Request $request)
    {
        $data = $request->except(['_token', 'action_type', 'qr_image']);
        if ($request->hasFile('qr_image')) {
            $path = $request->file('qr_image')->store('qrcodes', 'public');
            $data['qr_image'] = $path;
        }
        $token = uniqid('card_', true);
        session(['card_share_' . $token => $data]);
        $link = route('card.preview', ['token' => $token]);
        // If AJAX, return JSON
        if ($request->ajax()) {
            return response()->json(['link' => $link]);
        }
        // Fallback for non-AJAX
        return redirect()->route('card.preview', ['token' => $token]);
    }

    public function previewCard($token)
    {
        $data = session('card_share_' . $token);
        if (!$data) {
            abort(404, 'Card data not found.');
        }
        $template = $data['selected_template'] ?? '1';
        $templateView = 'templates.' . $template;
        if (view()->exists($templateView)) {
            return view($templateView, ['data' => $data, 'token' => $token]);
        }
        // fallback to generic preview if template view not found
        return view('card_preview', ['data' => $data, 'token' => $token]);
    }
}