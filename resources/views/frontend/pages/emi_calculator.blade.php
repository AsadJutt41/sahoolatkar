@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || EMI-CALCULATOR ')
@section('main-content')


<!-- Start Breadcrumb -->
<div class="container">
<div class="row mt-4">
    <div class="col-12">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></a></i></li>
            <li>EMI Calculator</li>
          </ul>
    </div>
</div>
</div>
<!-- End Breadcrumb -->
<!-- Start Title and btns -->
<div class="container">
<div class="row mt-4">
<div class="col-12">
    <h3 class="product-title">EMI Calculator</h3>
</div>
 </div>
 <hr>
</div>
<!-- End Title and btns -->
<!-- Sidebar and Products -->
<div class="container emi-calculator">
<div class="row mt-5 mb-5">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <form>
          <div class="dropdown d-grid gap-2 mt-4">

            <label>Product Category</label>

            <select name="">
                <option></option>
                <option>Testing</option>
            </select>
          </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dropdown d-grid gap-2 mt-4">
           <label>Installment Tenure</label>
           <select name="">
               <option></option>
               <option>Testing</option>
           </select>
          </div>
   </div>
   <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="dropdown d-grid gap-2 mt-4">
        <label>Actual Amount</label>
        <input type="number">

      </div>
</div>
  </div>
  <div class="row mt-5 mb-5">
    <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="dropdown d-grid gap-2 mt-4">
            <label>Advance %</label>
            <select name="">
                <option></option>
            </select>
          </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dropdown d-grid gap-2 mt-4">
           <label>Advance Amount</label>
           <input type="text" name="">
          </div>
   </div>
   <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="dropdown d-grid gap-2 mt-4">
        <label>Total Amount (Principle + Markup)</label>
        <input type="text" name="">

      </div>
</div>
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="dropdown d-grid gap-2 mt-4">
            <label>Monthly Installment</label>
            <input type="text" name="">
           </div>
        </form>
      </div>
  </div>
  <div class="row mb-5 mt-4">
    <div class="col-lg-5 col-md-6 col-sm-12">
      <div class="dropdown d-grid gap-2 mt-4">
         <p>*Calculator is provided only as general self-help Planning Tools.
            Calculated EMI Result is indicative only.</p>
         </div>
    </div>
</div>
</div>


@endsection
