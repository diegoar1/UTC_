@extends('layoutDash.dashboard')
@section('contenido')

<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Dar de alta a un nuevo profesor</h5>
                        </div>
                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{route('teachers.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nombre: </label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Escriba el nombre" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Correo: </label>
                                    <div class="col-sm-10">
                                        <input type="email" placeholder="ejemplo@ejemplo.com" class="form-control" name="email" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Contraseña</label>
                                    <div class="col-sm-10">
                                        <input type="password" placeholder="********" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <a href="{{route('teachers.index')}}" class="btn btn-white" type="submit">Cancelar</a>
                                        <button class="btn btn-primary" type="submit">Crear</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
</div>

@endsection
