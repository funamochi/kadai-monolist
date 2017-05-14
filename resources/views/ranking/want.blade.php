@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    <?php $wants = "Wants"; ?>
    @include('items.items', ['items' => $items, 'wanthave' => $wants])
@endsection