@extends('skeleton')
@section('content')

@include('_nav')
@include('_header')
@include('_slider')

@include('_cards')
@include('_features')

@include('_details')
@include('_video')
@include('_princing')
@include('_testimonials')
@include('_form')
@include('_footer')
@include('_copyright')

@endsection
@push('js')
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script>
  var typed = new Typed('#typed-element', {
    strings: ['administrativas', 'educacionales', 'empresariales','de negocios', 'sociales'],
    typeSpeed: 100,
    loop: true,
    loopCount: Infinity,
  });
</script>
</body>
@endpush
