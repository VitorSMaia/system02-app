@extends('layout.app')
@section('title','Detalhes Post')
@section('content')
        @livewire('post.comments',['id' => $id])
@endsection
