@extends('layoutDash.dashboard')
@section('contenido')

<div class="col-lg-12">
                    @if(session('info'))
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{session('info')}}
                        </div>
                    @endif
</div>

<div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Listado</h5>
                            <div class="ibox-tools">
                                <a type="button" class="btn btn-w-m btn-primary"
                                href="{{route('teachers.create')}}">Dar de Alta profesor</a>
                            </div>
                        </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr class="gradeX">
                                        <td>
                                            {{$teacher -> name}}
                                        </td>
                                        <td>
                                            {{$teacher -> email}}
                                        </td>
                                        <td>
                                            <a href="{{route('teachers.edit', $teacher->id)}}" type="button" class="btn btn-w-m btn-warning">Editar</a>
                                            <a href="javascript: document.getElementById('delete-{{$teachers->id}}').submit()" type="button" class="btn btn-w-m btn-danger">Dar de baja</a>
                                            <form id="delete-{{$student->id}}" action="{{route('teachers.destroy', $teacher->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
</div>

@endsection
