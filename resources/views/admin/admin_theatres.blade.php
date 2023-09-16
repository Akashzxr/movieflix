@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/theatre.css'])
    
    
      <main>
        <div class="add-btn-container">
          <a href="/admin/theatre/add-form"><button class="add-btn">+ Add theatre</button></a>
        </div>
        @if (count($theatres)>0)
        <table>
          <thead>
            <tr>
              <th>
                Theatre id
              </th>
              <th>
                Theatre Name
              </th>
              <th>
                Theatre Location
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th colspan='4'>
                {{ $theatres->links() }}
              </th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($theatres as $theatre)
            <tr>
              <td data-title='Provider Name'>
                {{ $theatre->theatre_id }}
              </td>
              <td data-title='E-mail'>
                {{ $theatre->theatre_name }}
              </td>
              <td data-title='theatre-location'>
                {{ $theatre->location }}
              </td>
              <td class='select'>
                <form action="/admin/theatre/{{$theatre->theatre_id}}" method="POST">
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
          <h1>No theatres inserted</h1>
        @endif
      </main>
      
@endsection