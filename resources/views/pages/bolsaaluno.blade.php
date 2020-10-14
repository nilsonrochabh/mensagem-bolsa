@extends('../templates.template')
@section('content')
<h1 class="text-center">Bolsas Aluno </h1>
<hr>
<div class="col-8 m-auto">
<button type="button" class="btn btn-primary" 
        data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ver as Mensagens</button>

<div class="modal fade" id="exampleModal" 
     tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensagens</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Menssage:</label>
            <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Bolsa</th>
      <th scope="col">Aluno</th>
      
    </tr>
  </thead>
 
  <tbody>
    @foreach($bolsa as $bolsas)
    @php
      $usuario=$bolsas->find($bolsas->id)->relUsers
    @endphp
    
    <tr>
      
      <td>{{$bolsas->name}}</td>
    <td>{{$usuario->id}}</td>
    
@endforeach
      
    </tr>
    
  </tbody>
</table>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>
 
@endsection