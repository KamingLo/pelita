<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class PostIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $filterType = '';
    public function updatingSearch() { $this->resetPage(); }
    public function updatingFilterType() { $this->resetPage(); }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        $posts = Post::query()
            // Filter Berdasarkan Judul atau Jenjang (Level)
            ->when($this->search, function($query) {
                $query->where(function($q) {
                    $q->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('levels', 'like', '%' . $this->search . '%');
                });
            })
            // Filter Berdasarkan Tipe (Berita/Pengumuman/Prestasi)
            ->when($this->filterType, function($query) {
                $query->where('type', $this->filterType);
            })
            ->latest()
            ->paginate(10);

        // Memastikan path pagination benar
        $posts->setPath(route('posts.index')); 

        return view('livewire.admin.post.post-index', [
            'posts' => $posts
        ]);
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if ($post) {
            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }
            $post->delete();
            session()->flash('message', 'Postingan berhasil dihapus.');
        }
    }
}