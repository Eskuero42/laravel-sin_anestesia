@extends('backend.principal')
@section('titulo', 'Admin')

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div
                        class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                        <h4 class="mb-sm-0">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row project-wrapper">
                <div class="col-xxl-8">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span
                                                class="avatar-title bg-primary-subtle text-primary rounded-2 fs-2">
                                                <i data-feather="briefcase" class="text-primary"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Active Projects</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                        data-target="825">0</span></h4>
                                                <span class="badge bg-danger-subtle text-danger fs-12"><i
                                                        class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02
                                                    %</span>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Projects this month</p>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span
                                                class="avatar-title bg-warning-subtle text-warning rounded-2 fs-2">
                                                <i data-feather="award" class="text-warning"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                        data-target="7522">0</span></h4>
                                                <span class="badge bg-success-subtle text-success fs-12"><i
                                                        class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58
                                                    %</span>
                                            </div>
                                            <p class="text-muted mb-0">Leads this month</p>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle text-info rounded-2 fs-2">
                                                <i data-feather="clock" class="text-info"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                                Total Hours</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                        data-target="168">0</span>h <span class="counter-value"
                                                        data-target="40">0</span>m</h4>
                                                <span class="badge bg-danger-subtle text-danger fs-12"><i
                                                        class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35
                                                    %</span>
                                            </div>
                                            <p class="text-muted text-truncate mb-0">Work this month</p>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

            </div><!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Lista de personas registradas</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri--line align-bottom me-1"></i>Registrar nueva persona</button>
                                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line">Eliminar</i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table table-striped align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="" data-sort="customer_name">C.I.</th>
                                                <th class="" data-sort="customer_name">Nombres</th>
                                                <th class="" data-sort="customer_name">Apellido Paterno</th>
                                                <th class="" data-sort="customer_name">Apellido Materno</th>
                                                <th class="" data-sort="email">Correo</th>
                                                <th class="" data-sort="date">Fecha de nacimiento</th>
                                                <th class="" data-sort="customer_name">Domicilio</th>
                                                <th class="" data-sort="phone">Teléfono</th>
                                                <th class="" data-sort="phone">celular</th>
                                                <th class="" data-sort="action">Acciones de Persona</th>
                                                <!-- sort -->
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            @foreach ($personas as $persona)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child" value="{{ $persona->id }}">
                                                        </div>
                                                    </th>
                                                    <td>{{ $persona->carnet }}</td>
                                                    <td>{{ $persona->nombres }}</td>
                                                    <td>{{ $persona->apellido_paterno }}</td>
                                                    <td>{{ $persona->apellido_materno }}</td>
                                                    <td>{{ $persona->correo }}</td>
                                                    <td>{{ $persona->fecha_nacimiento }}</td>
                                                    <td>{{ $persona->domicilio }}</td>
                                                    <td>{{ $persona->telefono }}</td>
                                                    <td>{{ $persona->celular }}</td>
                                                    <td>
                                                        <a type="button" class="btn btn-success add-btn" ><i href=""></i>Ver</a>
                                                        <a type="button" class="btn btn-warning add-btn" data-bs-toggle="modal" id="create-btn" 
                                                        data-bs-target="#showModal1"><i href="{{ route('admin.editar', $persona->id) }}"></i>Editar</a>
                                                        
                                                        <!-- Eliminar -->
                                                        <form action="{{ route('admin.eliminar', $persona->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">Eliminar</button>
                                                        </form>
                                                        <a type="button" class="btn btn-secondary add-btn" ><i href=""></i>Cargo</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="javascript:void(0);">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!--MODAL ADD-->
            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form action="{{ route('admin.guardar') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Campo Carnet -->
                                    <div class="col-md-6 mb-3">
                                        <label for="carnet" class="form-label">Carnet</label>
                                        <input type="text" name="carnet" class="form-control" placeholder="Ingrese N° de carnet" required />
                                    </div>
                        
                                    <div class="col-md-6 mb-3">
                                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" class="form-control" required />
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <!-- Campo Nombres -->
                                    <div class="col-md-12 mb-3">
                                        <label for="nombres" class="form-label">Nombres</label>
                                        <input type="text" name="nombres" class="form-control" placeholder="Ingrese nombres" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- Campo Apellido Paterno -->
                                    <div class="col-md-6 mb-3">
                                        <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                        <input type="text" name="apellido_paterno" class="form-control " placeholder="Ingrese apellido paterno" required />
                                    </div>
                        
                                    <!-- Campo Apellido Materno -->
                                    <div class="col-md-6 mb-3">
                                        <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                        <input type="text" name="apellido_materno" class="form-control" placeholder="Ingrese apellido materno" required />
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <!-- Campo Correo -->
                                    <div class="col-md-12 mb-6">
                                        <label for="correo" class="form-label">Correo</label>
                                        <input type="email" name="correo" class="form-control" placeholder="Ingrese orreo" required />
                                    </div>
                                </div>
                        
                                <div class="row"> 
                                    <!-- Campo Teléfono -->
                                    <div class="col-md-6 mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="number" name="telefono" class="form-control" placeholder="Ingrese teléfono"/>
                                    </div>

                                    <!-- Campo Celular -->
                                    <div class="col-md-6 mb-3">
                                        <label for="celular" class="form-label">Celular</label>
                                        <input type="number" name="celular" class="form-control" placeholder="Ingrese celular" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-6">
                                        <label for="domicilio" class="form-label">Domicilio</label>
                                        <input type="text" name="domicilio" class="form-control" placeholder="Ingrese domicilio"/>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </form>                     
                    </div>
                </div>
            </div>

            <div class="modal fade" id="showModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Persona</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form action="{{ route('admin.actualizar', $persona->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Método PUT para actualización -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Campo Carnet -->
                                    <div class="col-md-6 mb-6">
                                        <label for="carnet" class="form-label">Carnet</label>
                                        <input type="text" name="carnet" class="form-control" value="{{ old('carnet', $persona->carnet) }}" placeholder="Carnet" required />
                                    </div>
            
                                    <div class="col-md-6 mb-3">
                                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $persona->fecha_nacimiento) }}" required />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <!-- Campo Nombres -->
                                    <div class="col-md-12 mb-3">
                                        <label for="nombres" class="form-label">Nombres</label>
                                        <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $persona->nombres) }}" placeholder="Nombres" required />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <!-- Campo Apellido Paterno -->
                                    <div class="col-md-6 mb-3">
                                        <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                        <input type="text" name="apellido_paterno" class="form-control" value="{{ old('apellido_paterno', $persona->apellido_paterno) }}" placeholder="Apellido Paterno" required />
                                    </div>
            
                                    <!-- Campo Apellido Materno -->
                                    <div class="col-md-6 mb-3">
                                        <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                        <input type="text" name="apellido_materno" class="form-control" value="{{ old('apellido_materno', $persona->apellido_materno) }}" placeholder="Apellido Materno" required />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <!-- Campo Correo -->
                                    <div class="col-md-12 mb-3">
                                        <label for="correo" class="form-label">Correo</label>
                                        <input type="email" name="correo" class="form-control" value="{{ old('correo', $persona->correo) }}" placeholder="Correo" required />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <!-- Campo Teléfono -->
                                    <div class="col-md-6 mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $persona->telefono) }}" placeholder="Teléfono" required />
                                    </div>
            
                                    <!-- Campo Celular -->
                                    <div class="col-md-6 mb-3">
                                        <label for="celular" class="form-label">Celular</label>
                                        <input type="text" name="celular" class="form-control" value="{{ old('celular', $persona->celular) }}" placeholder="Celular" required />
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="domicilio" class="form-label">Domicilio</label>
                                        <input type="text" name="domicilio" class="form-control" value="{{ old('domicilio', $persona->domicilio) }}" placeholder="Domicilio" required />
                                    </div>
                                </div>
                            </div>
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!--MODAL EDIT-->
            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">
                                <div class="mb-3" id="modal-id" style="display: none;">
                                    <label for="id-field" class="form-label">ID</label>
                                    <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                </div>

                                <div class="mb-3">
                                    <label for="customername-field" class="form-label">Customer Name</label>
                                    <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required />
                                    <div class="invalid-feedback">Please enter a customer name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Email</label>
                                    <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Phone</label>
                                    <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required />
                                    <div class="invalid-feedback">Please enter a phone.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Joining Date</label>
                                    <input type="text" id="date-field" class="form-control" placeholder="Select Date" required />
                                    <div class="invalid-feedback">Please select a date.</div>
                                </div>

                                <div>
                                    <label for="status-field" class="form-label">Status</label>
                                    <select class="form-control" data-trigger name="status-field" id="status-field" required>
                                        <option value="">Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Block">Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

            <!-- Modal -->
            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you Sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@endsection
