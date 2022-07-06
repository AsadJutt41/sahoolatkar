@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || Cart ToPay ')

@push('style')
    <style type="text/css">
        .panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
.cart-to-pay{

}
.cart-to-pay h2 {
    font-weight: bold;
    line-height: 30px;
}
        .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  display: flex;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 20px 20px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.nav-pills .nav-link{color: #555}
.nav-pills .nav-link.active{color: white}input[type="radio"]{margin-right: 5px}.bold{font-weight:bold}

    </style>
@endpush
@section('main-content')

<!-- Start Breadcrumb -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <ul class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fas fa-home"></a></i></li>
        <li><a href="{{route('home')}}"> Home </a></li>
        <li><a href="{{route('home')}}"> Cart </a></li>
        <li><a href="{{route('home')}}"> Checkout </a></li>
        <li><a href="{{route('home')}}"> Cart to Pay </a></li>
      </ul>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Product Image & Text -->
<div class="container cart-to-pay ">
  <div class="row payment-method my-4">
    <div class="col-12">
      <h2 class="pb-4">Select Payment Method</h2>
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'easypaisa')"><img src="{{asset('frontend/logo-stripe.png')}}" alt="" style="max-width: 50%;"></button>
            <button class="tablinks" onclick="openCity(event, 'jazzcash')"><img src="{{asset('frontend/logo-stripe.png')}}" alt="" style="max-width: 50%;"></button>
            <button class="tablinks" onclick="openCity(event, 'strip')"><img src="{{asset('frontend/logo-stripe.png')}}" alt="" style="max-width: 50%;"></button>
        </div>
        <div id="easypaisa" class="tabcontent">
            <h3>EasyPaisa</h3>
            <div class="tab-content">
                <form action="#">

                </form>
            </div>
        </div>
        <div id="jazzcash" class="tabcontent">
            <h3>JazzCash</h3>
            <div class="tab-content">
                <form action="#">

                </form>
            </div>
        </div>
        <div id="strip" class="tabcontent">
            <h3>Stripe</h3>
            <div id="" class="tab-pane fade show active pt-3">

                <form role="form" action="{{ route('stripe.post') }}" method="post"  class="require-validation"  data-cc-on-file="false"
                data-stripe-publishable-key="pk_test_51HjIu0CtN8FBu4sMBrRyqvMhEHkLO1fAG4EUIqadkjchf3YTILAc0gnqkk0LFRCqbsxkb8k66DKe07cwuycRO3Y000zt0BGyQV"
                id="payment-form">
                    @csrf
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group card required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($ {{ \Cart::getTotal() }})</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
   </div>
</div>
    <!-- End Breadcrumb -->

@endsection

@push('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {

    var $form         = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {

        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  });

  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});

// Tabs
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
@endpush
