<x-layout>

    @if (session('success'))
        <div class="cos-alert-success" id="alert-msg">
            <div class="alert-content">
                <span class="symbol">[+]</span>
                <strong>La canzone è stata aggiunta con successo!</strong>
            </div>
            <button type="button" class="btn-close-custom"
                onclick="document.getElementById('alert-msg').style.display='none'">
                X
            </button>
        </div>
    @endif


    @if (session('error'))
        <div class="cos-alert-success" id="alert-msg">
            <div class="alert-content">
                <span class="symbol-2">[X]</span>
                <strong>Inserimento fallito, inserisci tutti i campi richiesti!</strong>
            </div>
            <button type="button" class="btn-close-custom"
                onclick="document.getElementById('alert-msg').style.display='none'">
                X
            </button>
        </div>
    @endif





    <x-header />

</x-layout>
