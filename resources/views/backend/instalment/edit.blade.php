@extends('backend.layouts.master')
@push('style')
<style>
    .form-control{
        margin-right:10px;
    }
    .margin-row{
        margin-bottom: 10px;
    }
</style>
@endpush

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Product</h5>
    <div class="card-body">
      <form method="post" action="{{route('product-instalment.update',$instalment->id)}}"   enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label"> Product <span class="text-danger">*</span></label>
          <select name="product_id" class="form-control" >
              <option value="">--Select Condition--</option>

              @foreach($instalments as $product)
              <option {{ ($product->id) == $instalment->product_id ? 'selected' : '' }} value="{{$product->id}}">{{$product->title}}</option>
              @endforeach
          </select>
        </div>
        <div class="col-lg-12 p-0">
            <div id="inputFormRow" class="d-flex margin-row">
                <input type="text" name="instalment_duration[]" class="form-control m-input" placeholder="Instalment duration " value="{{$instalment->instalment_duration}}" autocomplete="off">
                <input type="text" name="instalment_price[]" class="form-control m-input" placeholder="Instalment Price" value="{{$instalment->instalment_price}}"  autocomplete="off">
                <input type="text" name="advanced_payment[]" class="form-control m-input" placeholder="Advance Payment" value="{{$instalment->advanced_payment}}"  autocomplete="off">

            </div>
        </div>
        <div class="form-group mb-3 mt-2">
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
    $('#lfm').filemanager('image');

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 100
      });
    });

    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });
    });
    // $('select').selectpicker();

</script>

<script>
  $('#cat_id').change(function(){
    var cat_id=$(this).val();
    // alert(cat_id);
    if(cat_id !=null){
      // Ajax call
      $.ajax({
        url:"/admin/category/"+cat_id+"/child",
        data:{
          _token:"{{csrf_token()}}",
          id:cat_id
        },
        type:"POST",
        success:function(response){
          if(typeof(response) !='object'){
            response=$.parseJSON(response)
          }
          // console.log(response);
          var html_option="<option value=''>----Select sub category----</option>"
          if(response.status){
            var data=response.data;
            // alert(data);
            if(response.data){
              $('#child_cat_div').removeClass('d-none');
              $.each(data,function(id,title){
                html_option +="<option value='"+id+"'>"+title+"</option>"
              });
            }
            else{
            }
          }
          else{
            $('#child_cat_div').addClass('d-none');
          }
          $('#child_cat_id').html(html_option);
        }
      });
    }
    else{
    }
  })
</script>


@endpush
