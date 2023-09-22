@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/genre.css'])
    @vite(['resources/css/admin/ott.css'])
    
      <main>
        <div class="add-btn-container">
          <a href="/admin/ott/add-form"><button class="add-btn">+ Add Ott</button></a>
        </div>
        @if (count($otts)>0)
        <table>
          <thead>
            <tr>
              <th>
                Ott id
              </th>
              <th>
                Ott Name
              </th>
              <th>
                Ott Logo
              </th>
              <th>
                Action
              </th>
            </tr>
          </thead>
          @if($otts->links()!="")
          <tfoot>
            <tr>
              <th colspan='4'>
                {{ $otts->links() }}
              </th>
            </tr>
          </tfoot>
          @endif
          <tbody>
            @foreach ($otts as $ott)
            <tr>
              <td data-title='Provider Name'>
                {{ $ott->id }}
              </td>
              <td data-title='E-mail'>
                {{ $ott->ott_name }}
              </td>
              <td class="imagetd" data-title='E-mail'>
                <img src="/storage/{{ $ott->ott_logo }}"/>
              </td>
              <td class='select'>
                <form action="/admin/ott/{{$ott->id}}" method="POST">
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
          <h1>No Ott inserted</h1>
        @endif
      </main>
      
@endsection