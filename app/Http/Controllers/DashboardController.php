<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class DashboardController extends Controller
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect('/login')->withErrors(['msg' => 'Silakan login terlebih dahulu.']);
        }

        $blogs = [
            [
                'title' => 'Jangan Biarkan Tugas Menumpuk',
                'content' => 'memanajamen waktu agar hari tetap produktif tanpa jam kosong.'
            ],
            [
                'title' => 'Hidup Lebih Teratur dengan ToDo List',
                'content' => 'cara menyusun daftar tugas yang efektif setiap harinya.'
            ],
            [
                'title' => 'Rencanakan, Lakukan, Raih',
                'content' => 'Tips dan trik agar tetap produktif walaupun banyak aktivitas yang harus dilakukan.'
            ]
        ];

        return view('dashboard', ['blogs' => $blogs]);
    }
}