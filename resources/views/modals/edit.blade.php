<div class="modal" id="modal-atualizar-{{ $enquete->id }}">
    <div class="modal-box">
        <div class="modal-content">
            <form action="{{ route('enquetes.update', $enquete->id ) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-close">
                    <a onclick="closeModalWithId('modal-atualizar', {{$enquete->id}})">
                        <img src="{{ asset('img/icons/x.svg') }}" alt="Fechar">
                    </a>       
                </div>
                <h1>Atualizar Enquete</h1>
                <div class="input">
                    <label for="nome">Título</label>
                    <input type="text" name="nome" value="{{ $enquete->nome }}" placeholder="Digite aqui o seu título..." required>
                </div>
                <div class="input-dates">
                    <div class="input">
                        <label for="data-inicio">Data Inicial</label>
                        <input id="data_inicio" class="input-date" value="{{ $enquete->data_inicio }}"  type="datetime-local" name="data_inicio" onchange="selectDateInitial()" required>
                    </div>
                    <div class="input">
                        <label for="data-final">Data Final</label>
                        <input class="input-date"  type="datetime-local" value="{{ $enquete->data_final }}" name="data_final" required>
                    </div>
                </div>
                <div class="input">
                    <label >Alternativas</label>
                    <?php $i = 1;?>
                    @foreach ($alternativas as $alternativa)
                        @if ($alternativa->enquete_id == $enquete->id)
                            <input value="{{ $alternativa->descricao }}" name="descricao{{ $i }}" class="alternatives" type="text" placeholder="Alternativa..." required>
                            <?php $i++ ?>
                        @endif
                    @endforeach
                </div>
                <div class="button">
                    <button type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>