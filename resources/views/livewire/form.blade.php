<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model='nombre'>
    @error('nombre') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Descripcion</label>
    <input type="text" class="form-control" wire:model='descripcion'>
    @error('descripcion') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Garantia</label>
    <input type="text" class="form-control" wire:model='garantia'>
    @error('garantia') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Existencia</label>
    <input type="number" class="form-control" wire:model='existencia'>
    @error('existencia') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Precio Unitario</label>
    <input type="number" class="form-control" wire:model='precioUnitario'>
    @error('precioUnitario') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Vendedor</label>
    <input type="number" class="form-control" wire:model='id_vendedor' step=".01">
    @error('id_vendedor') <span>{{ $message }}</span> @enderror
</div>
