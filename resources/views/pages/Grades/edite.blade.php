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

<form  action="{{ route('Grade.update')}}"   method="POST" >
    @method('PUT')
 @csrf
    <div class="form-group">
      <label for="exampleInputPassword1"> {{ trans('Grade_trans.Grade_name') }}</label>
      <input type="text" class="form-control"   name="name" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> {{ trans('Grade_trans.Grade_name') }}</label>
        <input type="text" class="form-control" name="Notes" id="exampleInputPassword1" placeholder="Password">
      </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<!-- row closed -->
@endsection
@section('js')

@endsection
