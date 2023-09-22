@extends('layouts.admin')
@section('content')
@vite(['resources/css/admin/ott.css'])
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
      <form class="ottaddform" action="/admin/ott/add" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="formbold-input-flex">
            <div>
                <input
                type="text"
                name="ottname"
                id="firstname"
                placeholder="Netflix"
                class="formbold-form-input"
                />
                <label for="ottname" class="formbold-form-label"> Ott Name </label>
            </div>
          </div>
 
         <div class="center">
           <div class="form-input">
             <div class="preview">
               <img id="file-ip-1-preview">
             </div>
             <label for="file-ip-1">Upload Image</label>
             <input type="file" name="ottlogo" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
             
           </div>
         </div> 


          <button class="formbold-btn" type="submit">
              Submit
          </button>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
  </script>
@endsection