<x-layouts.app>
    <x-slot:title>{{ $levelData['title'] }} | Sekolah Pelita</x-slot:title>

    {{-- [BANNER] --}}
    <x-ui.hero-banner
        img="{{ asset($levelData['img']) }}" 
        title="{{ $levelData['title'] }}"
        desc="{{ $levelData['desc'] }}"
    />

    <x-sections.level.description 
        :title="$levelData['title']" 
        :desc="$levelData['desc']" 
    />

    {{-- 3. Keunggulan Kurikulum --}}
    <x-sections.level.features 
        :features="$levelData['features']" 
    />

    {{-- 4. Visi & Misi --}}
    <x-sections.level.vision-mission 
        :visionMission="$levelData['vision_mission']" 
    />

    {{-- 5. Postingan Terbaru --}}
    <x-sections.level.posts 
        :posts="$posts" 
        :dbCode="$levelData['db_code']" 
    />
</x-layouts.app>