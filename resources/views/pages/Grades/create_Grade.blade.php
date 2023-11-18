@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
<button type="button" class="btn btn-outline-primary">{{ trans('Grade_trans.create_Grads') }}</button>
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<form  action="{{ route('Grade.store')}}"   method="POST" >
 @csrf
    <div class="form-group">
      <label for="exampleInputPassword1"> الاسم بالعربي </label>
      <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1"> name </label>
      <input type="text" class="form-control" name="name_en" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> notes</label>
        <input type="text" class="form-control" name="Notes" id="exampleInputPassword1" placeholder="Password">
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<!-- row closed -->
@endsection
@section('js')

@endsection
