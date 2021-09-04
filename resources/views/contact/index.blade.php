@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">氏名</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">メールアドレス</label>
      <input name="email" type="email" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">送信する</button>
  </form>
@endsection
