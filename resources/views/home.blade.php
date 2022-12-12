@extends('app')
@section('content')
    <div class="grid-container">
        <div class="title-section">Abertas</div>
        <div class="card-section">
            @foreach ($enquetes as $enquete)
                @if ($enquete->type == 'open')
                <div class="card">
                    <div class="card-delete">
                        <img onclick="openModalWithId('modal-deletar', {{$enquete->id}})" src="{{ asset('img/icons/trash.svg') }}" alt="Fechar">       
                    </div>
                    <h3><a href="{{ route('votation.show',$enquete->id)}}">{{ $enquete->nome }}</a></h3>
                    <p class="date">Início: {{ date('d/m/Y H:i', strtotime($enquete->data_inicio)) }}</p>
                    <p class="date">Fim: {{ date('d/m/Y H:i', strtotime($enquete->data_final)) }}</p>
                    <div class="card-votes-edit">
                        <a onclick="openModalWithId('modal-atualizar', {{$enquete->id}})"><img src="{{ asset('img/icons/edit.svg') }}" alt="Editar"></a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="title-section1">Fechadas</div>
        <div class="card-section">
            @foreach ($enquetes as $enquete)
                @if ($enquete->type == 'closed')
                <div class="card">
                    <div class="card-delete">
                        <img onclick="openModalWithId('modal-deletar', {{$enquete->id}})" src="{{ asset('img/icons/trash.svg') }}" alt="Fechar">       
                    </div>
                    <h3><a href="{{ route('votation.show',$enquete->id)}}">{{ $enquete->nome }}</a></h3>
                    <p class="date">Início: {{ date('d/m/Y H:i', strtotime($enquete->data_inicio)) }}</p>
                    <p class="date">Fim: {{ date('d/m/Y H:i', strtotime($enquete->data_final)) }}</p>
                    <div class="card-votes-edit">
                        <a onclick="openModalWithId('modal-atualizar', {{$enquete->id}})"><img src="{{ asset('img/icons/edit.svg') }}" alt="Editar"></a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="title-section2">Futuras</div>
        <div class="card-section">
            @foreach ($enquetes as $enquete)
                @if ($enquete->type == 'future')
                <div class="card">
                    <div class="card-delete">
                        <img onclick="openModalWithId('modal-deletar', {{$enquete->id}})" src="{{ asset('img/icons/trash.svg') }}" alt="Fechar">       
                    </div>
                    <h3><a href="{{ route('votation.show',$enquete->id)}}">{{ $enquete->nome }}</a></h3>
                    <p class="date">Início: {{ date('d/m/Y H:i', strtotime($enquete->data_inicio)) }}</p>
                    <p class="date">Fim: {{ date('d/m/Y H:i', strtotime($enquete->data_final)) }}</p>
                    <div class="card-votes-edit">
                        <a onclick="openModalWithId('modal-atualizar', {{$enquete->id}})"><img src="{{ asset('img/icons/edit.svg') }}" alt="Editar"></a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="new-survey">
        <a onclick="openModal('modal-criar')">
            <img src="{{ asset('img/icons/new.svg') }}" alt="Nova Enquete">
        </a>       
    </div>
    @include('modals/create')
    @foreach ($enquetes as $enquete)
        @include('modals/confirmation-delete')
        @include('modals/edit')
    @endforeach
@endsection