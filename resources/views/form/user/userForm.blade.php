

			<div class="form-group has-feedback">
				{!! Form::label('name','Nombre',['class' => 'col-sm-2 control-label']) !!}
				
				<div class="col-sm-10">
					{!! Form::text('name', null ,['class' => 'form-control', 'placeholder' => 'Nombre','required']) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('email','Correo Electronico',['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::email('email', null ,['class' => 'form-control', 'placeholder' => 'exmple@gmail.com','required']) !!}	
				</div>
			</div>
			
			<div class="form-group">
				{!! Form::label('type','Rol',['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
					{!! Form::select('type', ['Admin' => 'Administrador', 'Creator' => 'Creador' ] ,null, ['class' => 'form-control','required']) !!}
				</div>			
			</div>

			@if($action == 'create')

			<div class="form-group">
				{!! Form::label('password','Contraseña',['class' => 'col-sm-2 control-label']) !!}
				<div class="col-sm-10">
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********','required']) !!}		
				</div>
			</div>

			@endif

			<div class="box-footer">
				<a href="{{ route($cancelar) }}" class="btn btn-default">Cancelar</a>
				<button  type="submit" class="btn btn-success pull-right">Enviar</button>
			</div>
