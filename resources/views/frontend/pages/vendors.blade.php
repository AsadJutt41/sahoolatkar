@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || VENDORS ')
@section('main-content')
<!-- Start Breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></a></i></li>
                    <li>Vendors</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="container">
        <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h3 class="product-title">Vendors</h3>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-12">
                </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-9 col-md-9 col-sm-12"><hr></div>
        </div>
    </div>
<!-- Vertical Tabs Section -->
<div class="container">
<div class="row mb-3 mt-3">
  <div class="col-12">
<div class="vendors-vertical-tabs">
  <div class="tab">
    <button class="tablinks" id="defaultOpen" clickid="All">All</button>
    @foreach($vendorscatg as $category)
    <button class="tablinks {{$category->title}}" clickid="{{preg_replace('/\s+/', '',$category->title)}}" id="defaultOpen">{{$category->title}}</button>
    @endforeach
  </div>
  <div id="London" class="tabcontent">
    <div class="row">
        @foreach($vendors as $vendor)
        @php
            $catg_info=DB::table('vender_categories')->select('title')->where('id',$vendor->cat_id)->get();
            foreach($catg_info as $category)
            {
                $catgname=$category->title;
            }
        @endphp
           <div class="col-lg-4 col-md-6 col-sm-12 vendor-format mb-5 {{preg_replace('/\s+/', '',$catgname ?? '')}}">
            <div class="vendor-box-shadow">
            <div class="vendors-img">
            <img src="{{asset('backend/vendor')}}/{{$vendor->photo}}" alt="{{$vendor->photo}}" >
           </div>
            <div class="vendors-btns">
                <button type="button" class="btn btn-light vp-btn">View Products</button>
                <button type="button" class="btn btn-light gd-btn">Get Direcions</button>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    {{ $vendors->links() }}


  </div>

  <div id="Paris" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.
      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>

  <div id="Tokyo" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Tyre" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Music" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Health" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Gaming" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Laptop" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Car" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Digital" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
  <div id="Electric" class="tabcontent">
    <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

      Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

      In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
      <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
  </div>
</div>
  </div>
</div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $(".all").click(function(){
            $(".vendor-format").show();
            });
            $(".vendors-vertical-tabs .tab button").click(function(event){
            var mytext = $(event.currentTarget).attr('clickid');
            if (mytext == "All")
            {
                $(".vendor-format").show();
            } else {
                var variable="."+mytext;
                $(".vendor-format").css('display','none');
                $(variable).css('display','block');
            }
        });
    });
</script>
@endpush
