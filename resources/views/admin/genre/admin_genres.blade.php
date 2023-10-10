@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/genre.css'])
    
    
      <main>
        <div class="add-btn-container">
          <a href="/admin/genre/add-form"><button class="add-btn">+ Add Genre</button></a>
        </div>
        @if (count($genres)>0)
        <table>
          <thead>
            <tr>
              <th>
                Genre id
              </th>
              <th>
                Genre Name
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          @if($genres->links()!="")
          <tfoot>
            <tr>
              <th colspan='3'>
                {{ $genres->links() }}
              </th>
            </tr>
          </tfoot>
          @endif
          <tbody>
            @foreach ($genres as $genre)
            <tr>
              <td>
                {{ $genre->genre_id }}
              </td>
              <td>
                {{ $genre->genre_name }}
              </td>
              <td>
                <form action="/admin/genre/{{$genre->genre_id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  {{ csrf_field() }}
                <button type="submit" class='button'>
                  <ion-icon name="trash-outline"></ion-icon>
                </button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
          <h1>No genres inserted</h1>
        @endif
      </main>
      
@endsection