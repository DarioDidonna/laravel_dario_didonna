<nav class="cos-navbar">
        <a href="/" class="nav-cell logo-cell">
            SOUND_OUTLINE_v1
        </a>

        <div class="nav-links">
            <a href="{{ route('song.index') }}" class="nav-link-item active">Lista Canzoni</a>
            <a href="#charts" class="nav-link-item">Classifiche</a>
            <a href="{{ route('song.create') }}" class="nav-link-item">Inserisci</a>
        </div>

        <div class="nav-cell search-cell">
            <input type="text" placeholder="[ CERCA CANZONE ]">
        </div>

        <a href="#login" class="nav-cell action-cell">
            LOGIN
        </a>
    </nav>