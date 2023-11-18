@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
<a href="{{route('Grade.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">{{ trans('Grade_trans.create_Grads') }}</a>

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
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @if (session('error'))
    <div class="alert">{{ session('error') }}</div>
@endif
      @foreach ($gard as $item)
          
     
      <tr>
        <th scope="row">3</th>
        <td> {{ $item->name}} </td>
        <td>{{ $item->Notes}}</td>
        <td>  <a href="{{ route('Grade.edit',$item->id) }}" target="_blank" rel="noopener noreferrer"></a> </td>
        <td>  <a href="{{ route('Grade.destroy',$item->id) }}" target="_blank" rel="noopener noreferrer"></a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<!-- row closed -->
@endsection
@section('js')

@endsection
