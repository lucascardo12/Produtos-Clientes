@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="d-flex flex-column">
    <div class="p-2">
      <a href="{{ route('produto.index')}}" class="btn-default">Cadastro de Produto</a>
    </div>
    <div class="p-2">
      <a href="{{ route('cliente.index')}}" class="btn-default">Cadastro de Cliente</a>
    </div>
  </div>
  
<div>
@endsection