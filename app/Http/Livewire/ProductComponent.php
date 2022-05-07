<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ProductComponent extends Component
{
    use WithPagination;

    public $view = 'create';

    public $product_id, $nombre, $descripcion, 
    $garantia, $existencia,$precioUnitario,$id_vendedor;

    public function destroy($id){
        Product::destroy($id);
    }

    public function save(){
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'garantia' => 'required',
            'existencia' => 'required',
            'precioUnitario' => 'required',
            'id_vendedor' => 'required'
        ]);

        Product::create([
            'nombre'        => $this->nombre,
            'descripcion' => $this->descripcion,
            'garantia'    => $this->garantia,
            'existencia'       => $this->existencia,
            'precioUnitario'       => $this->precioUnitario,
            'id_vendedor'       => $this->id_vendedor
        ]);
        $this->reset();
    }

    public function edit($id){
        $product = Product::find($id);

        $this->product_id = $product->id;
        $this->nombre = $product->nombre;
        $this->descripcion = $product->descripcion;
        $this->garantia = $product->garantia;
        $this->existencia = $product->existencia;
        $this->precioUnitario = $product->precioUnitario;
        $this->id_vendedor = $product->id_vendedor;

        $this->view = 'edit';
    }

    public function update(){
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'garantia' => 'required',
            'existencia' => 'required',
            'precioUnitario' => 'required',
            'id_vendedor' => 'required'
        ]);
        $product = Product::find($this->product_id);
        $product->update([
            'nombre'        => $this->nombre,
            'descripcion' => $this->descripcion,
            'garantia'    => $this->garantia,
            'existencia'       => $this->existencia,
            'precioUnitario'       => $this->precioUnitario,
            'id_vendedor'       => $this->id_vendedor
        ]);

        $this->reset();
    }

    public function render()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('livewire.product-component', compact('products'));
    }
}
