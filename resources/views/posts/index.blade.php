@extends('layouts.master')

@section('title','dashboard')

@section('content')
  welcome index 
{{-- @forelse ($collection as $item)
    
@empty
    
@endforelse --}}
@endsection

{{-- @yield('name',view::make('viwe-name')) --}}

@section('script')
    @parent
    <script src=""></script>
@endsection

@include('posts.test', ['some' => 'data'])
@includeIf('posts.test', ['some' => 'data'])
@includeWhen(true, 'posts.test', ['some' => 'data'])