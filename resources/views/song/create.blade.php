<x-layout>


<section class="css-form-section">
    <div class="form-info">
        <h2>Aggiungi_Nuova_Traccia</h2>
        <p>ENTRY_LOG_ID: 2026_X</p>
    </div>

    <form class="form-fields" action="{{ route('song.store') }}" method="POST">
        @csrf

        <div class="input-group">
            <label for="title">Titolo</label>
            <input name="title" type="text" id="title" placeholder="ES. DARK_MATTER" required>
        </div>

        <div class="input-group">
            <label for="artist">Artista</label>
            <input name="artist" type="text" id="artist" placeholder="ES. NEON_VOX" required>
        </div>

        <div class="input-group">
            <label for="album">Album</label>
            <input name="album" type="text" id="album" placeholder="ES. SYNTH_WAVES_VOL1">
        </div>

        <div class="input-group">
            <label for="desc">Descrizione</label>
            <textarea name="description" id="desc" placeholder="INSERIRE DETTAGLI TECNICI O NOTE SULLA PRODUZIONE..."></textarea>
        </div>

        <div class="btn-submit-container">
            <button type="submit" class="btn-insert">
                CONFERMA_INSERIMENTO_DATI [+]
            </button>
        </div>

    </form>
</section>









</x-layout>