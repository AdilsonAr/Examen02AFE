<div class="row">
    <div class="col-md-8">
        <div class="mt-2 table-responsive-md">
            <table class="table ml-3 mr-3 bg-white">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Garantia</th>
                    <th scope="col">Existencia</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Acción</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->nombre }}</td>
                            <td>{{ $product->descripcion }}</td>
                            <td>{{ $product->garantia }}</td>
                            <td>{{ $product->existencia }}</td>
                            <td>{{ $product->precioUnitario }}</td>
                            <td>{{ $product->id_vendedor }}</td>
                            <td>
                                <button type="button"
                                onclick="validar()" 
                                class="btn btn-warning"
                                 wire:click='edit({{ $product->id }})'>Editar</button>

                            </td>
                            <td>
                                <button type="button" 
                                onclick="validar()" 
                                class="btn btn-danger"
                                wire:click='destroy({{ $product->id }})' >Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links('pagination::Bootstrap-4') }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container">
            @include("livewire.$view")
        </div>

    </div>
</div>

<script>
    function validar(){
    if (confirm("Press a button!") == true) {
        wire:click='destroy({{ $product->id }})'
    } else {
        text = "You canceled!";
}

    }
</script>
