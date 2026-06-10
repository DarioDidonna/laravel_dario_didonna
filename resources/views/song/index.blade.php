<x-layout>

<section class="cos-container">
    <div class="cos-table-header">
        <div class="header-cell">ID_REF</div>
        <div class="header-cell">TITOLO_TRACCIA</div>
        <div class="header-cell">ARTISTA</div>
        <div class="header-cell">ALBUM</div>
        <div class="header-cell">IMMAGINE</div>
    </div>

    @foreach($songs as $song)
        <div class="cos-table-row">
            <div class="row-cell cell-id">#{{ $loop->iteration }}</div>
            <div class="row-cell cell-main">
                <span class="song-title">{{ $song->title }}</span>
                <p class="song-desc">{{ $song->description }}</p>
            </div>
            <div class="row-cell">{{ $song->artist }}</div>
            <div class="row-cell">{{ $song->album }}</div>
            <div class="row-cell">
                <img src="{{ Storage::url(ltrim($song->img ?? 'media/default.png', '/')) }}" alt="{{ $song->title }}">
            </div>
        </div>
    @endforeach

    <div class="cos-table-footer">
        TOTALE_ENTRIES: {{ count($songs) }} 
    </div>
</section>




</x-layout>