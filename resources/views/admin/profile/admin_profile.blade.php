@extends('layouts.admin')
@section('content')
 
@vite(['resources/css/admin/profile.css'])
<section class="profile-section">

    <div class="box1 box">
      <div class="content">
        <div class="image">
         @if($user->avatar==null)
          <img src="/images/user/user.jpg" alt="Profile Image">
          @else
          <img src="/storage/{{$user->avatar}}" alt="Profile Image">
          @endif
        </div>
        <div class="level">
          <p>{{ $user->username }}</p>
        </div>
        <div class="text">
          <p class="name">{{ $user->name }}</p>
          <p class="job_title">{{ $user->email }}</p>
        </div>

      <form class="update-form" method="POST" enctype="multipart/form-data" action="/admin/profile/update">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name}}" />
        <label for="name">UserName</label>
        <input type="text" name="username" value="{{$user->username}}" />
        <label for="name">Email</label>
        <input type="email" name="email" value="{{$user->email}}" />
        <label for="name">Avatar</label>
        <input type="file" name="image" />
        <div class="button">
            <div>
              <button class="connect" type="submit">Update</button>
            </div>
        </div>
      </form>

        
        
      </div>
    </div>
  <!--
    <div class="box2 box">
      <div class="content">
        <div class="row">
          <div class="image">
            @if($user->avatar==null)
            <img src="/images/user/user.jpg" alt="Profile Image">
            @else
            <img src="/storage/{{$user->avatar}}" alt="Profile Image">
            @endif
          </div>
          
        </div>
        <div class="text">
          <p class="name">{{$user->name}}</p>
          <p class="job_title">{{$user->email}}</p>
          <p class="about">{{$user->role}}</p>
        </div>
      </div>
    </div>
  !-->
  </section>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection