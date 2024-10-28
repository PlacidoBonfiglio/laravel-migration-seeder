@extends("layouts.app")

@section("page-title", "Treni")

@section("main-content")
    <h3 class="text-center pb-5">Treni che partono il 2024/10/25</h3>

    <div class="container">
        <div class="row row-cols-5 justify-content-center gap-5">

            @foreach ( $trains as $train )
                <div class="col text-center">
                    <p>ID: <span class="fw-bold">{{$train->id}}</span></p>
                    <p>Azienda: <span class="fw-bold">{{$train->Azienda}}</span></p>
                    <p>Codice Treno: <span class="fw-bold">{{$train->Codice_treno}}</span></p>
                    <p>Stazione di partenza: <span class="fw-bold">{{$train->Stazione_di_partenza}}</span></p>
                    <p>Stazione di arrivo: <span class="fw-bold">{{$train->Stazione_di_arrivo}}</span></p>
                    <p>Numero carrozze: <span class="fw-bold">{{$train->Numero_carrozze}}</span></p>
                    <p>Data partenza: <span class="fw-bold">{{$train->Data_di_partenza}}</span></p>
                    <p>Orario partenza: <span class="fw-bold">{{$train->Orario_di_partenza}}</span></p>
                    <p>Orario arrivo: <span class="fw-bold">{{$train->Orario_di_arrivo}}</span></p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
