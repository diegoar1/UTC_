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
                                href="{{route('students.create')}}">Dar de Alta alumnos</a>
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
                                    @foreach($students as $student)
                                    <tr class="gradeX">
                                        <td>
                                            {{$student -> name}}
                                        </td>
                                        <td>
                                            {{$student -> email}}
                                        </td>
                                        <td>
                                            <a href="{{route('students.edit', $student->id)}}" type="button" class="btn btn-w-m btn-warning">Editar</a>
                                            <a href="javascript: document.getElementById('delete-{{$student->id}}').submit()" type="button" class="btn btn-w-m btn-danger">Dar de baja</a>
                                            <form id="delete-{{$student->id}}" action="{{route('students.destroy', $student->id)}}" method="POST">
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

