<!--llamamos a nuestro modalhead que se encuentra en el directorio common-->
@include('common.modalHead')
<!--se programa el cuerpo del modal categories-->
<div class="row">
<div class="col-sm-12">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <span class="fas fa-edit">

                </span>
            </span>
        </div>
        <input type="text" wire:model.lazy="name" class="form-control" placeholder="ej: Laptops">
    </div>
    @error('name') <span class="text-danger er">{{ $message }}</span> @enderror
    
</div>
<div class="col-sm-12 mt-3">
    <div class="form-group custom-file">
        <input type="file" class="custom-file-input form-control" wire:model="image" accept="image/x-png, image/gif, image/jpeg, image/jpg">
        <label class="custom-file-label">Imagen {{ $image }}</label>
        @error('image') <span class="text-danger er">{{ $message }}</span> @enderror
    </div>

</div>
</div>
<!--llamamos a nuestro modalfooter que se encuentra en el directorio common-->
@include('common.modalFooter')

