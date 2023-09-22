@extends('layouts.admin')
@section('content')
    @vite(['resources/css/admin/theatre.css'])
    <section class="get-in-touch">
        <form class="contact-form row" action="/admin/theatre/add" method="POST">
            {{ csrf_field() }}
           <div class="form-field col x-100">
              <input id="theatre_name" class="input-text js-input" type="text" name="theatre_name" required>
              <label class="label" for="theatre_name">Theatre Name</label>
           </div>
           <div class="form-field col x-100">
            <input id="theatre_location" class="input-text js-input" type="text" name="theatre_location" required>
            <label class="label" for="theatre_location">Theatre Location</label>
           </div>
           <div class="form-field col x-100 align-center">
              <input class="submit-btn" type="submit" value="Add theatre">
           </div>
        </form>
     </section>
@endsection