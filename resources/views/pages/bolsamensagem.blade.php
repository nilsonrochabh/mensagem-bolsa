@extends('../templates.template')
@section('content')
<h1 class="text-center">Mensagem </h1>
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
            <label for="message-text" class="col-form-label"></label>
            <table class="table table-striped">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Data</th>
                    <th scope="col">Mensagem</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($mensagem as $msg)
                  @php
                    $bolsa=$msg->find($msg->id)->relBolsa;

                  @endphp
                    <!-- {{$msg->mensagem}}-->
                  <tr>
                  <td> {{$msg->id}}</td>
                      <td> {{$msg->updated_at}}</td>
                      <td> {{$msg->mensagem}}</td>
                    
                
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