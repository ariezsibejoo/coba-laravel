@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
  </div>

  <div class="col-lg-8">
    {{-- kalau pake controller resource action/posts dicombine method post otomatis menuju ke store di dashboardcontroller --}}
    {{-- enctype multipart untuk menangani inputan file --}}
      <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">
              {{-- $message ini default --}}
              {{ $message }}
            </div>
        @enderror
      </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}" readonly>
          @error('slug')
          <div class="invalid-feedback">
            {{-- $message ini default --}}
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>

            @else <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endif
            {{-- solusi dari yutuub --}}
            {{-- <option value="{{ $category->id }}" {{ old('category_id') == $category->id?'selected':'' }}>{{ $category->name }}</option> --}}
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          
          {{-- FITUR PREVIEW IMAGE --}}
          <img class="img-fluid mb-3 col-sm-5" id="uploadPreview">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage();">

          {{-- <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"> --}}
          @error('image')
          <div class="invalid-feedback">
            {{-- $message ini default --}}
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor input="body"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
      
  </div>



  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });

    // nonaktifkan fungsi upload file di trix

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })

// PREVIEW IMAGE
  function previewImage(){
    document.getElementById("uploadPreview").style.display= 'block';

    var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("image").files[0]);
      oFReader.onload = function (oFREvent)
      {
        document.getElementById("uploadPreview").src = oFREvent.target.result;

      };
    };


    // FITUR PREVIEW IMAGE DARI WPU
    // function previewImage(){
    // const image = document.querySelector('#image');
    // const imgPreview = document.querySelector('.img-preview');
    
    // imgPreview.style.display = 'block';

    // var oFReader = new FileReader();
    // oFReader.readAsDataURL(image.files[0]);
    // oFReader.onload = function (oFREvent) {
    //   imgPreview.src = oFRevent.target.result;
    // };

    // };
  </script>
@endsection


