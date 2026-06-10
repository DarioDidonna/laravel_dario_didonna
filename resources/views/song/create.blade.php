<x-layout>


<section class="css-form-section">
    <div class="form-info">
        <h2>Aggiungi_Nuova_Traccia</h2>
        <p>ENTRY_LOG_ID: 2026_X</p>
    </div>

    <form class="form-fields" action="{{ route('song.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-group ">
            <label for="title">Titolo</label>
            <input class="@error('title') is-inavlid @enderror" name="title" type="text" id="title" placeholder="ES. DARK_MATTER">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group ">
            <label for="artist">Artista</label>
            <input class="@error('artist') is-inavlid @enderror" name="artist" type="text" id="artist" placeholder="ES. NEON_VOX">
            @error('artist')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="input-group">
            <label for="album">Album</label>
            <input class="@error('album') is-inavlid @enderror" name="album" type="text" id="album" placeholder="ES. SYNTH_WAVES_VOL1">
            @error('album')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="img">File</label>
            <input name="img" type="file" id="img" placeholder="FILE">
        </div>

        <div class="input-group">
            <label for="desc">Descrizione</label>
            <textarea class="@error('description') is-inavlid @enderror" name="description" id="desc" placeholder="INSERIRE DETTAGLI TECNICI O NOTE SULLA PRODUZIONE..."></textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="btn-submit-container">
            <button type="submit" class="btn-insert">
                CONFERMA_INSERIMENTO_DATI [+]
            </button>
        </div>

    </form>
</section>









</x-layout>