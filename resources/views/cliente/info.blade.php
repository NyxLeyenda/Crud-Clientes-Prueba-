
  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$cliente->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"> 
          <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('home.update',$cliente->ID)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="modal-body">     
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text"
    class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->Nombre}}">
</div>        
<div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input type="text"
      class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->Telefono}}">
  </div>        
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input type="email"
      class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->Correo}}">
  </div>        
</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>









  
  
  <!-- Modal -->
  <div class="modal fade" id="delete{{$cliente->ID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <form action="{{route('home.destroy',$cliente->ID)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">¿Estas seguro de Eliminar a <strong>{{$cliente->Nombre}}</strong>?
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        </form>
      </div>
    </div>
  </div>