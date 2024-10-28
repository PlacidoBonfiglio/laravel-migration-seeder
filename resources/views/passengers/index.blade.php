@extends("layouts.app")

@section("page-title", "Passeggeri")

@section("main-content")
    <h3 class="text-center pb-5">Passeggeri</h3>

    <div class="container">
        <div class="row row-cols-5 justify-content-center gap-5">

            @foreach ( $passengers as $passenger )
                <div class="col text-center">
                    <p>ID: <span class="fw-bold">{{$passenger->id}}</span></p>
                    <p>Nome: <span class="fw-bold">{{$passenger->first_name}}</span></p>
                    <p>Cognome: <span class="fw-bold">{{$passenger->last_name}}</span></p>
                    <p>Data di nascita: <span class="fw-bold">{{$passenger->date_of_birth}}</span></p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
