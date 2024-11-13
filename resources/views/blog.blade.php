@extends('layouts.main')

@section('content')

    <div class="container">
      {{-- @dd($data) --}}
      @foreach ($data as $artikel)
      
      <div class="card">
          <div class="card-content">
            <p class="card-title"><a href="">{{ $artikel->judul }}</a></p>
            <p>Category : {{ $artikel->category->name }}</p>
            <p class="card-text">{{ $artikel->isi }}</p>
          </div>
      </div>

      @endforeach
  
    </div>

@endsection