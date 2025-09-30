<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" 
           name="name" 
           id="name"
           class="form-control" 
           placeholder="Ingrese el nombre de la marca"
           value="{{ old('name', $brand->name ?? '') }}"
           required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea name="description" 
              id="description"
              class="form-control" 
              placeholder="Ingrese la descripción de la marca"
              rows="3">{{ old('description', $brand->description ?? '') }}</textarea>
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>