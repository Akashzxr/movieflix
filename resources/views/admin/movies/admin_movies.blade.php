@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/movies.css'])
      <main>
        <div class="add-btn-container">
          <a href="/admin/movies/add-form"><button class="add-btn">+ Add Movie</button></a>
        </div>
        @if (count($movies)>0)
        <table>
          <thead>
            <tr>
              <th>
                Movie id
              </th>
              <th>
                movie Name
              </th>
              <th>
                Director
              </th>
              <th>
                Producers
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th colspan='5'>
                {{ $movies->links() }}
              </th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($movies as $movie)
            <tr>
              <td data-title='Provider Name'>
                {{ $movie->movie_id }}
              </td>
              <td data-title='E-mail'>
               <p> {{ $movie->movie_name }}</p>
              </td>
              <td data-title='E-mail'>
               <p> {{ $movie->director }}</p>
              </td>
              <td data-title='E-mail'>
                <p>{{ $movie->producers }}</p>
              </td>
              <td class='select'>
                <form action="/admin/movies/{{$movie->movie_id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  {{ csrf_field() }}
                <button type="submit" class='button'>
                  delete
                </button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
          <h1>No movies inserted</h1>
        @endif
      </main>
      
@endsection