@extends("layouts.app")

@section("page-title", "Macchinisti")

@section("main-content")
    <h3 class="text-center pb-5">Macchinisti</h3>

    <div class="container">
        <div class="row row-cols-5 justify-content-center gap-5">

            @foreach ( $machinists as $machinist )
                <div class="col text-center">
                    <p>ID: <span class="fw-bold">{{$machinist->id}}</span></p>
                    <p>Nome: <span class="fw-bold">{{$machinist->first_name}}</span></p>
                    <p>Cognome: <span class="fw-bold">{{$machinist->last_name}}</span></p>
                    <p>Data di nascita: <span class="fw-bold">{{$machinist->date_of_birth}}</span></p>
                    <p>Country: <span class="fw-bold">{{$machinist->country}}</span></p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
