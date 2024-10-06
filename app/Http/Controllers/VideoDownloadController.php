<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class VideoDownloadController extends Controller
{
    public function download(Request $request)
    {
        $url = $request->input('url');

        if (!$url) {
            return back()->with('error', 'Please provide a valid Instagram video URL.');
        }

        try {

              // Define the public directory where the files are saved
              $publicDir = public_path();
    
             // Remove all .mp4 files in the public folder
		$files = glob($publicDir . '/*.mp4');  // Get all .mp4 files in the public folder
		foreach ($files as $file) {
		if (is_file($file)) {
		
		    unlink($file);  // Delete each file
		}
		}
    
    
            $scriptPath = base_path('yTDlScript.py');
            
            $process = new Process(['python3', $scriptPath, $url]);
            $process->run();

            $output = $process->getOutput();
            
    $files = glob($publicDir . '/*.mp4');  // Get all .mp4 files in the public folder
   
    
            $filePath = $files[0] ?? null ;

            if (!file_exists($filePath)) {
                return back()->with('error', 'Downloaded video file not found.');
            }

            return response()->download($filePath);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to download video. Error: ' . $e->getMessage());
        }
    }
}
