@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
    @php
        $title = 'New Form';
        $data = [
             ['type' => 'text', 'label' => 'Name', 'class' => 'form-control', 'id' => '' ,'placeholder' => 'Name', 'name' => 'name'],
             ['type' => 'text', 'label' => 'Email' , 'class' => 'form-control', 'id' => '' ,'placeholder' => 'Email', 'name' => 'email'],

];
    @endphp

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> {{$title}}</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <x-forms action="/" method="POST" :title="$title" :data-json="$data"/>
        <x-forms action="/" method="POST" :title="$title" :data-json="$data"/>
    </div>
@endsection
