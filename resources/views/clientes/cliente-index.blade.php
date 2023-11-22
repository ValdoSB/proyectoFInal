<x-index-cliente-layout>
    @foreach($clientes as $cliente)
    <div class="product-item bg-light">
        <div class="card">
            <div class="thumb-content">
                <!-- <div class="price">$200</div> -->
                <a href="{{route('clientes.show', $cliente)}}">
                <img class="card-img-top img-fluid" src="template/img/user.jpg" alt="Card image cap">
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title"><a href="{{route('clientes.show', $cliente)}}" > {{ $cliente->clientName }}</a></h4>
                    <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href="{{route('clientes.show', $cliente)}}"><i class="fa fa-volume-control-phone"></i> Tel: {{ $cliente->clientPhone }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{route('clientes.show',$cliente->id)}}"><i class="fa fa-calendar"></i>Edad: {{ $cliente->clientAge }}</a><br>
                                </li>
                                <li >
                                    <br>
                                    <form action="{{ route('clientes.destroy',$cliente)}}" method="POST">
                                        @csrf
                                        @method ('DELETE')
                                        <button style="border:none" style="background-color: transparent" class="btn btn-danger">
                                            <i class="fa fa-trash">  ELIMINAR</i>
                                        </button>   
                                    </form>
                                </li >
                                <li >
                                    <a href="{{route('clientes.edit',$cliente->id)}}">
                                        <button style="border:none" style="background-color: transparent" class="btn btn-warning">
                                            <i class="fa fa-pencil">  EDITAR</i>
                                        </button>  
                                    </a> 
                                </li>
                                <li >
                                    <a href="{{route('clientes.show',$cliente->id)}}">
                                        <button style="border:none" style="background-color: transparent" class="btn btn-info">
                                            <i class="fa fa-address-book-o">  INFORMACIóN</i>
                                        </button>  
                                    </a> 
                                </li>    
                    </ul>
                    
                            
            </div>
        </div>
    </div>   
    @endforeach
</x-index-cliente-layout>

