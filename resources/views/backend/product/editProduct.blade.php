@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Update Product</h5>
    <div class="card-body">
      <form method="post" action="#" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
          <label for="cat_id">Product Name <span class="text-danger">*</span></label>
          <select name="product_name" id="cat_id" class="form-control">
              <option value="">--Select any Product Name--</option>
              @foreach($products['result'] as $key=>$item)
                  <option value='{{ $item['name'] }}'>{{ $item['name'] }}</option>
              @endforeach
          </select>
            @error('product_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo</label>
            <input type="file" class="form-control" accept="image/*" name="product_image" id="product_image" required onchange="loadFile(event)">
            <img id="output" style="height: 150px; width: 150px; border-radius: 25px; border: none; margin-top: 10px;"/>
            @error('product_image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Code <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="code" name="code" value="{{old('code')}}" />
            @error('code')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Department <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="department" name="department" value="{{old('department')}}" />
            @error('department')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Type <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="type" name="type" value="{{old('type')}}" />
            @error('type')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Category <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="category" name="category" value="{{old('category')}}" />
            @error('category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">SubCategory <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="subCategory" name="subCategory" value="{{old('subCategory')}}" />
            @error('subCategory')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">salePrice <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="salePrice" name="salePrice" value="{{old('salePrice')}}" />
            @error('salePrice')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Vendor Detail <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="vendorDetail" name="vendorDetail" value="{{old('vendorDetail')}}" />
            @error('vendorDetail')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="summary" class="col-form-label">Addional Details <span class="text-danger">*</span></label>
            <textarea class="form-control" id="additional_information" name="additional_information">{{old('additional_information')}}</textarea>
            @error('additional_information')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="summary" class="col-form-label">Discount Price <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="discount_price" name="discount_price" value="{{old('discount_price')}}" />
            @error('discount_price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {{-- <div class="form-group">
            <label for="cat_id">Category / Brand for Mobile App <span class="text-danger">*</span></label>
            <select name="brand_name" id="cat_id" class="form-control">
                <option value="">--Select any Category / Brand for Mobile App--</option>
                @foreach($unique_brnad as $item)
                    <option value='{{ $item }}'>{{ $item }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo</label>
            <input type="file" class="form-control" accept="image/*" name="brnad_image" id="brnad_image" required onchange="loadFile2(event)">
            <img id="output2" style="height: 150px; width: 150px; border-radius: 25px; border: none; margin-top: 10px;"/>
            @error('product_image')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="cat_id">Type / Category for Mobile App <span class="text-danger">*</span></label>
            <select name="categor_name" id="categor_name" class="form-control">
                <option value="">--Select any Type / Category for Mobile App--</option>
                @foreach($unique_type as $item)
                    <option value='{{ $item }}'>{{ $item }}</option>
                @endforeach
            </select>
        </div>

          <div class="form-group">
              <label for="inputPhoto" class="col-form-label">Photo</label>
              <input type="file" class="form-control" accept="image/*" name="brnad_image" id="brnad_image" required onchange="loadFile3(event)">
              <img id="output3" style="height: 150px; width: 150px; border-radius: 25px; border: none; margin-top: 10px;"/>
              @error('product_image')
                  <span class="text-danger">{{$message}}</span>
              @enderror
          </div> --}}




        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFile2 = function(event) {
        var output = document.getElementById('output2');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script>
    var loadFile3 = function(event) {
        var output = document.getElementById('output3');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
@endpush
