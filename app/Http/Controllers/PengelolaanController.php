<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PengelolaanController extends Controller
{
    public function index()
    {
        return view('pengelolaan');
    }

    public function tambah(Request $request)
    {
        $request->validate(['todo' => 'required|string']);

        $todos = session('todos', []);
        $todos[] = $request->todo;
        session(['todos' => $todos]);

        return redirect('/pengelolaan');
    }

    public function hapus($index)
    {
        $todos = session('todos', []);
        if (isset($todos[$index])) {
            unset($todos[$index]);
            $todos = array_values($todos); // Reindex array
            session(['todos' => $todos]);
        }

        return redirect('/pengelolaan');
    }

    public function edit($index)
{
    $todos = session('todos', []);
    if (isset($todos[$index])) {
        session([
            'edit_index' => $index,
            'edit_value' => $todos[$index]
        ]);
    }
    return redirect('/pengelolaan');
}

public function update(Request $request, $index)
{
    $request->validate(['todo' => 'required|string']);
    $todos = session('todos', []);
    if (isset($todos[$index])) {
        $todos[$index] = $request->todo;
        session(['todos' => $todos]);
    }

    // Hapus session edit
    session()->forget(['edit_index', 'edit_value']);
    return redirect('/pengelolaan');
}

}
