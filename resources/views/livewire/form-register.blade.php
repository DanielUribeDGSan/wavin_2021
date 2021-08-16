<div x-data>
    <form class="h-100 p-0 m-0" wire:submit.prevent="submit">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <input type="text"
                    class="form-control {{ $nombre == '' && $validate_form ? 'error_border' : '' }} {{ $nombre != '' && $validate_form ? 'correcto_border' : '' }}"
                    name="nombre" id="nombre" placeholder="Nombre *" wire:model.defer="nombre">
                <span> {{ $errors->first('nombre') }}</span>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <input type="text"
                    class="form-control {{ $apellidos == '' && $validate_form ? 'error_border' : '' }} {{ $apellidos != '' && $validate_form ? 'correcto_border' : '' }}"
                    name="apellidos" id="apellidos" placeholder="Apellidos *" wire:model.defer="apellidos">
                <span> {{ $errors->first('apellidos') }}</span>

            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <input type="text"
                    class="form-control {{ $telefono == '' && $validate_form ? 'error_border' : '' }} {{ $telefono != '' && $validate_form ? 'correcto_border' : '' }}"
                    name="telefono" id="telefono" placeholder="Teléfono *" wire:model.defer="telefono">
                <span> {{ $errors->first('telefono') }}</span>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <select
                    class="form-control  {{ $pais == '' && $validate_form ? 'error_border' : '' }} {{ $pais != '' && $validate_form ? 'correcto_border' : '' }}"
                    name="pais" id="pais" wire:model.defer="pais">
                    <option selected disabled value="">País *</option>
                    <option>Opción 1</option>
                </select>
                <span> {{ $errors->first('pais') }}</span>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <input type="text"
                    class="form-control {{ $errors->has('email') ? 'error_border' : '' }} {{ $email == '' && $validate_form && !$errors->has('email') ? 'error_border' : '' }} {{ $email != '' && $validate_form && !$errors->has('email') ? 'correcto_border' : '' }}"
                    name="email" id="email" placeholder="Email corporativo *" wire:model.defer="email">
                <span>
                    @if ($errors->first('email') == 'The email has already been taken.')
                        El email ya ha sido registrado.
                    @else
                        {{ $errors->first('email') }}
                    @endif
                </span>

            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <select
                    class="form-control {{ $marca_dual == '' && $validate_form ? 'error_border' : '' }} {{ $marca_dual != '' && $validate_form ? 'correcto_border' : '' }}"
                    name="marcaDual" id="marcaDual" wire:model.defer="marca_dual">
                    <option selected disabled value="">Marca Dual *</option>
                    <option value="1">opción 1</option>
                </select>
                <span> {{ $errors->first('marca_dual') }}</span>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <div class="form-check d-flex align-items-center justify-content-end h-100">
                    <input type="checkbox"
                        class="form-check-input {{ $aviso == '' && $validate_form ? 'error_border' : '' }} {{ $aviso != '' && $validate_form ? 'correcto_border' : '' }}"
                        name="aviso" id="aviso" wire:model.defer="aviso">
                    <label class="form-check-label ml-10" for="aviso">Acepto aviso de
                        privacidad</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mt-3">
                <button class="btn btn-azul" type="submit">Registrarme</button>
            </div>
        </div>
    </form>
    {{-- Errores --}}
    @if ($completed)
        <script>
            document.getElementById("aviso").checked = false;
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Tu registro se ha completado correctamente',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    {{-- @if ($validate_form == 1)

        <script>
            Swal.fire({
                icon: 'info',
                title: 'Ups...',
                html: 'Es necesario que llenes todos lo campos y aceptes el aviso de privacidad',
                confirmButtonText: 'Aceptar',
            });
        </script>
    @endif --}}




</div>
