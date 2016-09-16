@extends('skeleton')

@section('title')
  Kirim Email
@endsection

@section('content')

<div class="row">
  <form class="col s12" action="{{url('email')}}" method="post">
    {!! csrf_field() !!}
    <div class="row">
      <div class="input-field col s12">
        <input type="text" name="email" id="email">
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="subject" id="subject">
        <label for="subject">Subject</label>
      </div>
      <div class="input-field col s12">
        <textarea id="message" name="message" class="materialize-textarea"></textarea>
        <label for="message">Pesan</label>
      </div>
      <div class="input-field col s12">
        <button type="submit" class="btn">kirim</button>
      </div>
    </div>
  </form>
</div>
@endsection
