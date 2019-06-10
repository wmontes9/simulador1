<form action="{{route('ficha.store')}}" method="post">
    {{csrf_field()}}
    <div class="modal fade" id="newFicha">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h2 class="text-center">Ficha</h2>
                </div>
                <div class="modal-body">
                    <!--<input type="hidden" value="{{ Session::get('competencia') }}" name="id_competencia">-->
                    <div class="form-group">
                        <label for="">Código</label>
                        <input type="text" class="form-control" name="codigo" v-model="codigo">
                        @if($errors->has("codigo"))
							<p class="text-danger">{{$errors->first("codigo")}}</p>
						@endif
                    </div>
                    <div class="form-group">
						<label for="">Fecha inicio</label>
						<input type="date" name="fecha_inicio" v-model="fecha_inicio" class="form-control">
						@if($errors->has("fecha_inicio"))
							<p class="text-danger">{{$errors->first("fecha_inicio")}}</p>
						@endif
                    </div>
                    <div class="form-group">
						<label for="">Fecha fin</label>
						<input type="date" name="fecha_fin" v-model="fecha_fin" class="form-control">
						@if($errors->has("fecha_fin"))
							<p class="text-danger">{{$errors->first("fecha_fin")}}</p>
						@endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>