<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => 'doc_icon.png',
                'title' => 'Dokumen',
                'highlight' => 'Perencanaan',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'icon' => 'leaf_icon.png',
                'title' => 'Kajian',
                'highlight' => 'Lingkungan',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'icon' => 'group_icon.png',
                'title' => 'Pendampingan',
                'highlight' => 'Operasional',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ],
            [
                'icon' => 'learn_icon.png',
                'title' => '',
                'highlight' => 'Pelatihan',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ]
        ];

        // Definisikan variabel $poppinsClass jika diperlukan
        $poppinsClass = 'font-poppins'; // Atau nilai yang sesuai

        // Kirim variabel ke view
        return view('page/home', compact('services', 'poppinsClass'));
    }
}
