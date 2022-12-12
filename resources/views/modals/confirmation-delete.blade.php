<div class="modal" id="modal-deletar-{{ $enquete->id }}">
    <div class="modal-delete">
        <div class="modal-delete-content">
            <form class="modal-delete-items" class="form-delete" action="{{ route('enquetes.destroy',$enquete->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="message">
                    <h3>Você deseja realmente deltar a enquete {{ $enquete->nome }}?</h3>
                </div>
                <div class="buttons">
                    <button id="delete" type="submit">Deletar</button>
                    <div id="cancel" onclick="closeModalWithId('modal-deletar', {{$enquete->id}})">Cancelar</div>
                </div>
            </form>
        </div>
    </div>
</div>