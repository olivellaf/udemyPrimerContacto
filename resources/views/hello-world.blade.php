@extends('layouts.master')

@section('title', 'Laravel Course - Ferry')

@section('header')
    <!-- This overwrite the content from MASTER HEADER -->
    <!-- If we use @parent, we can't mantain the MASTER HEADER content and also put the new one -->
    @parent
    <h1>HEADER from Hello World</h1>
@stop

@section('content')
    <p>Content from the Hello World page.</p>
@stop


