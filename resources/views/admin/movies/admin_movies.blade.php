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
          @if($movies->links()!="")
          <tfoot>
            <tr>
              <th colspan='5'>
                {{ $movies->links() }}
              </th>
            </tr>
          </tfoot>
          @endif
          <tbody>
            @foreach ($movies as $movie)
            <tr>
              <td>
                {{ $movie->movie_id }}
              </td>
              <td>
               <p> {{ $movie->movie_name }}</p>
              </td>
              <td>
               <p> {{ $movie->director }}</p>
              </td>
              <td>
                <p>{{ $movie->producers }}</p>
              </td>
              <td>
                <form action="/admin/movies/{{$movie->movie_id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  {{ csrf_field() }}
                <button type="submit" class='button'>
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </form>
              <form action="/admin/moviecard/{{$movie->movie_id}}" method="get">
                @csrf
                {{ csrf_field() }}
              <button type="submit" class='view-btn'>
                <ion-icon name="eye-outline"></ion-icon>
              </button>
             </form>
             
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
          <h1 style="color: white">No movies inserted</h1>
        @endif
      </main>
      
@endsection