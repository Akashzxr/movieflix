@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/genre.css'])
    <section class="get-in-touch">
        <form class="contact-form row" action="/admin/genre/add" method="POST">
            {{ csrf_field() }}
           <div class="form-field col x-100">
              <input id="genre_name" class="input-text js-input" type="text" name="genre_name" required>
              <label class="label" for="genre_name">Genre Name</label>
           </div>
           <div class="form-field col x-100 align-center">
              <input class="submit-btn" type="submit" value="Add Genre">
           </div>
        </form>
     </section>
@endsection