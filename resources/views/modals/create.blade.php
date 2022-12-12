<div id="modal-criar" class="modal">
    <div class="modal-box">
        <div class="modal-content">
            <form action="{{ route('enquetes.store') }}" method="POST">
                @csrf
                <div class="modal-close">
                    <a onclick="closeModal('modal-criar')">
                        <img src="{{ asset('img/icons/x.svg') }}" alt="Fechar">
                    </a>       
                </div>
                <h1>Nova Enquete</h1>
                <div class="input">
                    <label for="nome">Título</label>
                    <input type="text" name="nome" placeholder="Digite aqui o seu título..." required>
                </div>
                <div class="input-dates">
                    <div class="input">
                        <label for="data-inicio">Data Inicial</label>
                        <input id="data_inicio" class="input-date" type="datetime-local" name="data_inicio" onchange="selectDateInitial()" required>
                    </div>
                    <div class="input">
                        <label for="data-final">Data Final</label>
                        <input class="input-date"  type="datetime-local" name="data_final" required>
                    </div>
                </div>
                <div class="input" id="alternatives-input">
                    <label >Alternativas</label>
                    @for ($i = 1; $i <= 3; $i++)
                    <input name="alternativa{{ $i }}" class="alternatives" type="text" placeholder="Alternativa..." required>
                    @endfor
                </div>
                <div class="new-alternative"><p onclick="createInput('alternatives-input')">+ Nova alternativa</p></div>
                <div class="button">
                    <button type="submit">Criar</button>
                </div>
            </form>
        </div>
    </div>
</div>