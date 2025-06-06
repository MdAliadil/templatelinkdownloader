<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\VisitingCard; 
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Str;


class TemplateController extends Controller
{
public function downloadPdf(Request $request)
{


    // Set max execution time
    ini_set('max_execution_time', '300');

    try {
        // Step 1: Store form data
        $data = VisitingCard::create([
            'user_id'   => auth()->id(),
            'slogan'    => $request->input('slogan'),
            'name'      => $request->input('name'),
            'company'   => $request->input('company'),
            'email'     => $request->input('email'),
            'mobile'    => $request->input('mobile'),
            'address'   => $request->input('address'),
            'website'   => $request->input('website'),
            'linkedin'  => $request->input('linkedin'),
            'twitter'   => $request->input('twitter'),
            'instagram' => $request->input('instagram'),
            'facebook'  => $request->input('facebook'),
            'banner'    => $request->input('banner'),
            'qr_image'   => $request->input('qr_image') || null,
        ]);
        // Step 2: Handle QR Image
        if ($request->hasFile('qr_image')) {
            $file = $request->file('qr_image');
            $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!in_array($file->getMimeType(), $allowedMimeTypes)) {
                return back()->withErrors(['qr_image' => 'Invalid image type uploaded.']);
            }

            $path = $file->store('public/qr_codes');
            $fullPath = storage_path('app/' . $path);
            $mimeType = $file->getMimeType();
            $base64 = 'data:' . $mimeType . ';base64,' . base64_encode(file_get_contents($fullPath));

            $data['qr_image'] = $base64;

            Storage::delete($path);
        } else {
            $data['qr_image'] = null;
        }

        // Step 3: Load template
        $templateNumber = $request->input('selected_template', 1);
        $template = in_array($templateNumber, [2, 3, 4, 5]) ? $templateNumber : 1;
       
        $html = view("templates.$template", compact('data'))->render();

        // Step 4: Generate and Download PDF
        $pdfPath = storage_path('app/public/card.pdf');

        Browsershot::html($html)
            ->format('A4')
            ->landscape(true)
            ->margins(0, 0, 0, 0)
            ->showBackground()
            ->noSandbox()
            ->timeout(300)
            ->setOption('timeout', 120000) // Puppeteer (in ms)
            ->setOption('protocolTimeout', 300000)
            ->save($pdfPath);

        return response()->download($pdfPath)->deleteFileAfterSend(true);
    
    } catch (\Exception $e) {
        // Log the actual error
        \Log::error('PDF generation failed: ' . $e->getMessage());

        // Show user-friendly error
        return back()->with('error', 'Something went wrong while generating the PDF. Please try again.');
    }
}



}
