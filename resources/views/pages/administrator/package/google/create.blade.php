@extends('index')

@section('content')
<form method="POST" action="{{ URL::to('google-packages') }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInput1" class="form-label">قیمت ارزی</label>
      <input type="text" class="form-control" id="exampleInput1" aria-describedby="emailHelp" name="currency_price">
    </div>
    <div class="mb-3">
      <label for="exampleInput2" class="form-label">قیمت ریالی</label>
      <input type="text" class="form-control" id="exampleInput2" name="main_price">
    </div>
    <button type="submit" class="btn btn-primary">ثبت</button>
  </form>
@stop