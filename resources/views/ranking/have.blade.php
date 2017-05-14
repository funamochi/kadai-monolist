@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    <?php $haves = "Haves"; ?>
    @include('items.items', ['items' => $items, 'wanthave' => $haves])
@endsection