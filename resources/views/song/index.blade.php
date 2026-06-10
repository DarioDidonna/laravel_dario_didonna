<x-layout>

<section class="cos-container">
    <div class="cos-table-header">
        <div class="header-cell">ID_REF</div>
        <div class="header-cell">TITOLO_TRACCIA</div>
        <div class="header-cell">ARTISTA</div>
        <div class="header-cell">ALBUM</div>
        <div class="header-cell">AZIONI</div>
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
            <div class="row-cell cell-actions">
                <a href="#" class="action-link">[ EDIT ]</a>
                <a href="#" class="action-link delete">[ DEL ]</a>
            </div>
        </div>
    @endforeach

    <div class="cos-table-footer">
        TOTALE_ENTRIES: {{ count($songs) }} // END_OF_LIST
    </div>
</section>




</x-layout>