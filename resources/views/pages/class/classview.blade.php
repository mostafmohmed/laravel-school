@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
<a href="{{route('classroom.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ trans('Grade_trans.create_Grads') }}</a>

@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<table class="table">
    @if(session('success'))

        <div class="alert alert-success">

          {{ session('success') }}

        </div> 

    @endif

    <thead>
      <tr>
       
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">class</th>
      
      </tr>
    </thead>
    <tbody>
      
      @foreach ($classroom as $item)
 
      <tr>
        <th scope="row">3</th>
        <td> {{ $item->name_classroom}} </td>
        
        <td> {{ $item->grade->name}} </td>
        <td>  <a href="{{ route('classroom.edit',$item->id) }}" target="_blank" rel="noopener noreferrer"> edite </a> </td>
        <td>  <a href="{{ route('classroom.destroy',$item->id) }}" target="_blank" rel="noopener noreferrer">  delet </a> </td>
      </tr>

      @endforeach
    </tbody>
  </table>
<!-- row closed -->
@endsection
@section('js')

@endsection
