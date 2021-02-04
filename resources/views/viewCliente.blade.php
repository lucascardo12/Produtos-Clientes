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
  <div class="d-flex flex-row-reverse">
    <a href="{{ route('cliente.create')}}" class="">Adicionar Cliente</a>
  </div>
  <table class="table">
    <thead>
        <tr class="table-success">
          <td>ID</td>
          <td>Name</td>
          <td>CPF</td>
          <td>E-mail</td>
          <td class="text-center">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($cliente as $clientes)
        <tr>
            <td>{{$clientes->id}}</td>
            <td>{{$clientes->name}}</td>
            <td>{{$clientes->cpf}}</td>
            <td>{{$clientes->email}}</td>      
            <td class="text-center">
                <a href="{{ route('cliente.edit', $clientes->id)}}" class="btn btn-primary btn-sm">Alterar</a>
                <form action="{{ route('cliente.destroy', $clientes->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection