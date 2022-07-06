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
    <h5 class="card-header">Add Product Instalment</h5>
    <div class="card-body">
      <form method="post" action="{{route('product-instalment.store')}}"   enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Select Product <span class="text-danger">*</span></label>
          <select name="product_id" class="form-control" >
              <option value="">--Select Condition--</option>
              @foreach ($products as $product)
                 <option value="{{$product->id}}">{{$product->title}}</option>
              @endforeach
          </select>
        </div>
        <div class="col-lg-12 p-0">
            <div id="inputFormRow" class="d-flex margin-row">
                <input type="text" name="data[instalment_duration][]" class="form-control m-input" placeholder="Instalment duration " autocomplete="off">
                <input type="text" name="data[instalment_price][]" class="form-control m-input" placeholder="Instalment Price" autocomplete="off">
                <input type="text" name="data[advanced_payment][]" class="form-control m-input" placeholder="Advance Payment" autocomplete="off">
                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
            </div>
            <div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info">Add Row</button>
        </div>
        <div class="form-group mb-3 mt-2">
          <button type="reset" class="btn btn-warning">Reset</button>
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

<script type="text/javascript">
    // add row
    $("#addRow").click(function () {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="data[instalment_duration][]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<input type="text" name="data[instalment_price][]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<input type="text" name="data[advanced_payment][]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>
@endpush
