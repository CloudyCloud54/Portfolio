<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $p = config('portfolio');

        $stats = [
            ['value' => count($p['projects']),   'label' => 'Projets'],
            ['value' => count($p['experience']), 'label' => 'Stages'],
            ['value' => count($p['skills']['Langages']), 'label' => 'Langages'],
            ['value' => count($p['skills']['Frameworks']), 'label' => 'Frameworks'],
        ];

        return view('portfolio', compact('p', 'stats'));
    }

    public function cv()
    {
        $path = public_path(config('portfolio.cv_file'));

        abort_unless(is_file($path), 404);

        return response()->download($path, 'CV_Kaffo_Fomano_Wilfried_Kevin.pdf');
    }
}
