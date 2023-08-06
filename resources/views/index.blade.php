@extends('skeleton')
@section('content')

@include('_nav')
@include('_header')
@include('_slider')

@include('_card1')
@include('_cards')
@include('_features')



@include('_details')
{{-- @include('_video') --}}
{{-- @include('_princing') --}}
{{-- @include('_testimonials') --}}
{{-- @include('_form') --}}
@include('_footer')
@include('_copyright')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <img src="{{ asset('me/logo.svg') }}" width="150px" alt="educk logo">
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          Formulario de contacto, envianos tus datos y te contactaremos a la brevedad.
        </p>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico<small class="text-danger">*</small></label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mensaje<small class="text-danger">*</small></label>
            <input type="text" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-dark btn-lg btn-block">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

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
