@extends('layouts.admin')
@section('content')
    <!--<div style="color:white">
        @foreach ($genres as $genre)
        <div>{{ $genre->genre_name }}</div>
        @endforeach
    </div>
    {{ $genres->links() }}!-->


    @vite(['resources/css/admin/genre.css'])
      <main>
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
          <tfoot>
            <tr>
              <th colspan='3'>
                {{ $genres->links() }}
              </th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($genres as $genre)
            <tr>
              <td data-title='Provider Name'>
                {{ $genre->genre_id }}
              </td>
              <td data-title='E-mail'>
                {{ $genre->genre_name }}
              </td>
              <td class='select'>
                <form action="/admin/genre/{{$genre->genre_id}}" method="POST">
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
      </main>
      
@endsection