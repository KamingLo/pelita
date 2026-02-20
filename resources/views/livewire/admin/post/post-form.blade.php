<div class="max-w-4xl mx-auto">
    {{-- SEO & Trix Assets --}}
    @push('styles')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <style>
            trix-editor { 
                border-radius: 0.75rem !important; 
                border-color: #e5e7eb !important; 
                min-height: 350px !important; 
                font-family: inherit;
            }
            trix-toolbar .trix-button-row { border-bottom: 1px solid #f3f4f6 !important; padding-bottom: 5px; }
        </style>
    @endpush

    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 uppercase tracking-tight">
                {{ $isEdit ? 'Edit Postingan' : 'Buat Postingan Baru' }}
            </h1>
            <p class="text-sm text-gray-500">Isi detail berita atau pengumuman di bawah ini.</p>
        </div>
        <a href="{{ route('posts.index') }}" class="text-sm font-bold text-gray-400 hover:text-gray-600 uppercase tracking-widest transition-colors">Batal</a>
    </div>

    <form wire:submit="save" class="space-y-6">
        {{-- SECTION 1: THUMBNAIL --}}
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-4">Thumbnail Berita (WebP Only)</label>
            
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div class="w-full md:w-64 h-40 rounded-xl bg-gray-50 border-2 border-dashed border-gray-200 overflow-hidden relative">
                    @if ($thumbnail)
                        <img src="{{ $thumbnail->temporaryUrl() }}" class="w-full h-full object-cover">
                    @elseif ($existingThumbnail)
                        <img src="{{ asset('storage/' . $existingThumbnail) }}" class="w-full h-full object-cover">
                    @else
                        <div class="flex flex-col items-center justify-center h-full text-gray-400 text-center px-4">
                            <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <span class="text-[10px] font-bold uppercase italic">Belum ada gambar</span>
                        </div>
                    @endif
                </div>

                <div class="flex-1 space-y-2">
                    <input type="file" wire:model="thumbnail" id="thumbnail" class="hidden" accept="image/webp">
                    <label for="thumbnail" class="inline-block px-4 py-2 bg-gray-800 text-white text-[10px] font-bold uppercase tracking-widest rounded-lg cursor-pointer hover:bg-gray-700 transition-colors">
                        Pilih Gambar
                    </label>
                    <p class="text-xs text-gray-400">Format <strong>.webp</strong>. Maks 2MB.</p>
                    @error('thumbnail') <span class="text-red-500 text-xs block font-bold mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        {{-- SECTION 2: UTAMA (JUDUL, TIPE, LEVEL) --}}
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Judul Postingan</label>
                <input wire:model.live="title" type="text" placeholder="Masukkan judul..." 
                    class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 outline-none font-bold text-gray-700">
                @error('title') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Tipe</label>
                    <select wire:model="type" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 outline-none text-sm font-bold text-gray-600">
                        <option value="" default>-- Pilih salah satu --</option>                        
                        <option value="prestasi">Prestasi</option>
                        <option value="berita">Berita</option>
                        <option value="pengumuman">Pengumuman</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Target Jenjang</label>
                    <select wire:model="levels" class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 outline-none text-sm font-bold text-gray-600">
                        <option value="" default>-- Pilih salah satu --</option>
                        <option value="Seluruhnya">SELURUHNYA</option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
                    @error('levels') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Slug URL</label>
                <input wire:model="slug" type="text" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-sm font-medium text-gray-600 outline-none">
                @error('slug') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
            </div>
        </div>

        {{-- SECTION 3: ISI KONTEN (TRIX) --}}
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-4">Isi Konten</label>
            <div wire:ignore x-data="{ 
                    content: @entangle('content'),
                    initTrix() { this.$refs.trix.editor.loadHTML(this.content); } 
                }" 
                x-init="initTrix()" @trix-change="content = $event.target.value" class="prose max-w-none">
                <input id="trix_input" type="hidden">
                <trix-editor input="trix_input" x-ref="trix" class="trix-content" placeholder="Tuliskan isi berita..."></trix-editor>
            </div>
            @error('content') <span class="text-red-500 text-xs font-bold mt-2 block">{{ $message }}</span> @enderror
        </div>

        {{-- SECTION 4: SEO OPTIMIZATION --}}
        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
            <h3 class="text-xs font-black uppercase tracking-[0.2em] text-blue-600">Optimasi SEO</h3>
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Meta Description</label>
                    <textarea wire:model="meta_description" rows="2" placeholder="Ringkasan singkat untuk Google..."
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 outline-none text-sm"></textarea>
                    @error('meta_description') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Keywords</label>
                    <input wire:model="meta_keywords" type="text" placeholder="Contoh: berita sekolah, ppdb 2024" 
                        class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 outline-none text-sm">
                    @error('meta_keywords') <span class="text-red-500 text-xs font-bold">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="w-full py-4 bg-blue-600 text-white font-bold rounded-2xl shadow-lg shadow-blue-100 hover:bg-blue-700 transition-all uppercase tracking-widest text-sm flex items-center justify-center">
            <span wire:loading.remove wire:target="save">
                {{ $isEdit ? 'Simpan Perubahan' : 'Terbitkan Postingan' }}
            </span>
            <span wire:loading wire:target="save">Menyimpan...</span>
        </button>
    </form>

    @push('scripts')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    @endpush
</div>