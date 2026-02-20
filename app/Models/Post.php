<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'levels',
        'thumbnail',
        'title',
        'slug',
        'content',
        'view_count',
        'meta_description',
        'meta_keywords',
    ];

    public function getUrlAttribute()
    {
        $prefix = match ($this->type) {
            'berita' => 'berita',
            'pengumuman' => 'pengumuman',
            'prestasi' => 'prestasi',
        };
        
        return url("/{$prefix}/{$this->slug}");
    }

    // Opsional: Untuk statistik mingguan nanti
    public function views()
    {
        return $this->hasMany(PostView::class);
    }
}