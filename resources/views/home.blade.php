@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin:2rem;">
                <div class="card-header">{{ __('Dar Ganador') }}</div>
                <div style="display:flex;
                flex-direction: column;
                justify-content:center;
                align-items:center;" 
                class="card-body">
                    @if($numeroUsers > 5)
                        {{ __('Dale al boton y sabras el ganador del sorteo!') }}
                        <div>
                                <form action="{{url('darGanador')}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <button type="submit" class="btn btn-success" >
                                        Ganador
                                    </button>
                                </form>
                        </div>
                    @else
                        {{ __('El numero de usuarios no es suficiente!') }}
                        <p>
                            Cuando haya más de 5 usuarios podras dar un ganador
                        </p>
                    @endif
                    {{-- <h4>Agregar tabla con datatable de usuarios concurso
                        <br>
                        agregar la accion de dar el ganador
                        <br>
                        agregar diseño de anuncio del ganador en el lading page
                    </h4> --}}
                </div>
            </div>
            <div class="card" style="margin:2rem;">
        <div class="card-header">{{ __('Ganador') }}</div>
        <div style="display:flex;
        flex-direction: column;
        justify-content:center;
        align-items:center;"  class="card-body">
            @foreach($users as $user)
                @if($user->Ganador == 'Si')
                    <p>
                        El ganador es: {{$user->Nombres ." ". $user->Apellidos}}
                        <br>
                        Con Cedula: {{$user->Cedula}}
                        <br>
                        De la Ciudad: {{$user->Ciudad}}
                        <br>
                        Del departamento de: {{$user->Departamento}}
                    </p>
                @endif
                
            @endforeach
            
        </div>
        </div>
        </div>
    </div>
    <div class="card-datatable">
        <table class="table table-striped jambo_table table-hover" id="usuarios_table">
            <thead>
                <tr class="headings">  
                    <th class="column-title">Cedula</th>
                    <th class="column-title">Nombre</th>
                    <th class="column-title">Departamento</th>
                    <th class="column-title">Ciudad</th>
                    <th class="column-title">Celular</th>
                    <th class="column-title">Email</th>                                            
                </tr>
            </thead>
            <tbody id="_results">
                @foreach($users as $user)
                <tr class="even pointer">  
                    <td class=" ">{{$user->Cedula}}</td>
                    <td class=" ">{{$user->Nombres ." ". $user->Apellidos}}</td>
                    <td class=" ">{{$user->Departamento}}</td>
                    <td class=" ">{{$user->Ciudad}}</td>
                    <td class=" ">{{$user->Celular}}</td>
                    <td class=" ">{{$user->Email}}</td>
                </tr>  
                @endforeach
            </tbody>
        </table>  
    </div>
</div>
@endsection
@section('css')
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css"/>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
    integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/cec3a6c7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            var usuarios_table=$('#usuarios_table').DataTable({
                responsive:true,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "No hay registros  ",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
                lengthChange: false,
                buttons: [
                    {
                        extend: 'csv',
                    },
                ]
            });
            usuarios_table.buttons().container()
        .appendTo( '#usuarios_table_wrapper .col-md-6:eq(0)' );
        });
    </script>
    <script src="{{'js/registro.js'}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
        integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        @if (session('ganador') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Ya existe un ganador..!',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
        @if (session('ganador') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: "Vuelva a intentarlo..!",
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
@endsection