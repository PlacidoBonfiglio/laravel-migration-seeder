@extends("layouts.app")

@section("page-title", "Laravel Migration Seeder")

@section("main-content")
    <a href="/trains">
        <h3 class="text-center pb-5">Cliccami per vedere solo i treni che partono il 2024/10/25</h3>
    </a>

    <a href="/machinists">
        <h3 class="text-center pb-5">Cliccami per vedere i macchinisti</h3>
    </a>

    <a href="/passengers">
        <h3 class="text-center pb-5">Cliccami per vedere i passeggeri</h3>
    </a>
@endsection
