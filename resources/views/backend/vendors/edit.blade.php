@extends('backend.layouts.master')

@section('main-content')

<div class="card">
<div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
    <h5 class="card-header">Edit Vendor</h5>
    <div class="card-body">
      <form method="post" action="{{route('vendor_update',$vendor->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="name" placeholder="Enter title"  value="{{$vendor->name}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
         <label for="post_cat_id">Category <span class="text-danger">*</span></label>
          <select name="cat_id" class="form-control">
                  @foreach($vendorscatg as $category)
                  <option {{ ($vendor->cat_id) == $category->id ? 'selected' : '' }} value="{{$category->id}}">{{$category->title}}</option>
                  @endforeach
          </select>
          @error('cat_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
     
        <div class="form-group">
          <img src="{{asset('backend/vendor')}}/{{$vendor->photo}}" alt="{{$vendor->photo}}" style="width: 15%;margin:0 auto;display:block;" class="mb-3">
          <label for="inputPhoto" class="col-form-label">Photo</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <input type='file' name="photo" id="photo" accept="image/*" />
                    <span style="color: red" id="photo">@error('photo'){{$message}}@enderror</span>
                </span>
            </div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        


        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
<script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>
@endpush