

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

<form  action="{{ route('classroom.store')}}"   method="POST" >
 @csrf
    <div class="form-group">
      <label for="exampleInputPassword1"> الاسم بالعربي </label>
      <input type="text" class="form-control" name="name_ar" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <select   name="option" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
      @foreach ($grad as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
       
      </select>

      {{-- <select name="option" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select> --}}


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<!-- row closed -->
@endsection
@section('js')

@endsection



