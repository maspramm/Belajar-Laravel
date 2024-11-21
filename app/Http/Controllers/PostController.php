<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf; 

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'foto_mahasiswa' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nim' => 'required|min:5',
            'nama_mahasiswa' => 'required|min:5',
        ]);
    
        if ($request->hasFile('foto_mahasiswa')) {
            // Hapus gambar lama
            if ($post->foto_mahasiswa && Storage::exists('public/posts/' . $post->foto_mahasiswa)) {
                Storage::delete('public/posts/' . $post->foto_mahasiswa);
            }
    
            // Simpan gambar baru
            $image = $request->file('foto_mahasiswa');
            $imagePath = $image->store('public/posts');
    
            $post->update([
                'foto_mahasiswa' => basename($imagePath),
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->nama_mahasiswa,
            ]);
        } else {
            $post->update([
                'nim' => $request->nim,
                'nama_mahasiswa' => $request->nama_mahasiswa,
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Post $post)
    {
        if ($post->foto_mahasiswa && Storage::exists('public/posts/' . $post->foto_mahasiswa)){
            Storage::delete('public/posts/'. $post->foto_mahasiswa);
        }
        $post->delete();
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function generatePDF()
    {
        $posts = Post::all();
        $pdf = PDF::loadView('posts.pdf', compact ('posts'))->setPaper('a4', 'landscape');
        return $pdf->download('posts.pdf');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function store(Request $request)
    {
        $request->validate( [
            'foto_mahasiswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nim' => 'required|min:5',
            'nama_mahasiswa' => 'required|string|min:5' 
        ]);

        $image = $request->file('foto_mahasiswa');
        $imagePath = $image->store('public/posts',);
        
        Post::create([
            'foto_mahasiswa' => basename($imagePath),
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa
        ]);
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
        
    }
}