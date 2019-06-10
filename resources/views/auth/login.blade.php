 <form v-on:submit.prevent="login">
    <div class="modal fade" id="login">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
					<button class="close" data-dismiss="modal">&times;</button>
					<h3 class="text-center">Inicio de sesión</h3>
				</div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tipo">Tipo documento</label>
                        <select name="type_document" v-model="type_document" class="form-control">
                            <option value="1">Cedula de ciudadania</option>
                            <option value="2">Tarjeta de identidad</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">Documento</label>
                        <input type="text" class="form-control" name="documento"  v-model="documento">
                        <div class="error" v-if="errors.documento">
                            <p class="text-danger">@{{ errors.documento[0] }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                        <input  type="password"  class="form-control"  name="password" v-model="password">
                        <div class="error" v-if="errors.password">
                            <p class="text-danger">@{{ errors.password[0] }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Recordar contraseña') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                 <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </div>
            <a class="btn btn-link" href="{{url('u\recuperar_acceso')}}">
                Olvidaste contraseña
            </a>   
            </div>
        </div>
    </div>
</div>
</form>