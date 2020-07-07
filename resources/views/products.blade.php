@extends('layouts.app')
@section('page-title','prodotti')
@section('content')
<table class="table table-bordered mx-auto mt-5" style="width: 800px">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kind</th>
        <th scope="col">Color</th>
        <th scope="col">Size</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($prodotti as $prodotto)
        <tr>
            <th scope="row">{{$prodotto->id}}</th>
            <td>{{$prodotto->kind}}</td>
            <td>{{$prodotto->color}}</td>
            <td>{{$prodotto->size}}</td>
            <td>{{$prodotto->price}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection