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
                <a class='button' href='#'>
                  delete
                </a>
              </td>
            </tr>
            @endforeach
          <!--  <tr>
              <td data-title='Provider Name'>
                Julius Neumann
              </td>
              <td data-title='E-mail'>
                e-mail@test-email.com
              </td>
              <td class='select'>
                <a class='button' href='#'>
                  Select
                </a>
              </td>
            </tr>
            <tr>
              <td data-title='Provider Name'>
                Christoph Koller
              </td>
              <td data-title='E-mail'>
                e-mail@test-email.com
              </td>
              <td class='select'>
                <a class='button' href='#'>
                  Select
                </a>
              </td>
            </tr>
            <tr>
              <td data-title='Provider Name'>
                Bram Lemmens
              </td>
              <td data-title='E-mail'>
                e-mail@test-email.com
              </td>
              <td class='select'>
                <a class='button' href='#'>
                  Select
                </a>
              </td>
            </tr>!-->
          </tbody>
        </table>
      </main>
      
@endsection