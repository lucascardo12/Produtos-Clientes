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
    <a href="{{ route('produto.create')}}" class="btn">Adicionar Produto</a>
  </div>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Descricao</td>
          <td>Valor</td>
          <td class="text-center">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($produto as $produtos)
        <tr>
            <td>{{$produtos->id}}</td>
            <td>{{$produtos->name}}</td>
            <td>{{$produtos->descricao}}</td>
            <td>{{$produtos->valor}}</td>      
            <td class="text-center">
                <a href="{{ route('produto.edit', $produtos->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('produto.destroy', $produtos->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection