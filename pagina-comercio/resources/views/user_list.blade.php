<!doctype html>
<html lang="en">
<!-- [Head] start -->
<title>Users list</title>
@include('layouts.head')
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  @include('layouts.sidebar')
  <!-- [ Sidebar Menu ] end -->
  <!-- [ Header Topbar ] start -->
  @include('layouts.topBar')
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                <li class="breadcrumb-item" aria-current="page">User List</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">User List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <li class="text-red-500 list-none">{{ $error }}</li>
          @endforeach
        @endif
        <div class="col-sm-12">
          <div class="card border-0 table-card user-profile-list">
            <div class="ms-auto" style="margin-bottom: 20px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Agregar usuario</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Created at</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $offset = $id * 5;
                      $length = 5;
                      $usersArray = array_slice($users['data'], $offset, $length);
                      count($usersArray);
                    ?>
                    @if (count($usersArray) == 0)
                      <td colspan="6" class="text-center text-muted"> No hay usuarios disponibles. </td>
                    
                    @else
                      @foreach ($usersArray as $user)
                        <tr>
                            @php
                                $date = new DateTime($user['created_at']);
                                $newDate = $date->format('Y-m-d'); 

                                $phone_number = $user['phone_number'];
                                if($user['phone_number'] == null){
                                  $phone_number = "Sin numero";
                                }
                            @endphp
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src={{asset ("/assets/images/user/avatar-1.jpg")}} alt="user image"
                                class="img-radius align-top m-r-15" style="width: 40px" />
                              <div class="d-inline-block">
                                <h6 class="m-b-0">{{ $user['name'] }}</h6>
                                <p class="m-b-0 text-primary">{{ $user['role'] }}</p>
                              </div>
                            </div>
                          </td>
                          <td>{{ $user['role'] }}</td>
                          <td>{{ $user['email'] }}</td>
                          <td>{{ $phone_number }}</td>
                          <td>{{$newDate}}</td>
                          <td>
                          <ul class="list-inline mb-0">
                                <li class="list-inline-item m-0"><a href="{{ asset('./user_details/' . $user['id']) }}" class="avtar avtar-s btn btn-secondary"><i
                                      class="ti ti-eye f-18"></i></a></li>
                                <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                      class="ti ti-pencil f-18"></i></a></li>
                                <li class="list-inline-item m-0"><a href="#"
                                    class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                                </li>
                              </ul>
                          </td>
                        </tr>

                      @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              
            </div>
            <div class="row">
              <div class="col-12 d-flex justify-content-between align-items-center">
                <?php
                    $records = count($users['data']);
                    $entriesPerPage = 5;
                    $pages = ceil($records / $entriesPerPage);
                ?>
                <p class="mb-0">Mostrando {{ $id + 1 }} de {{ $pages }} páginas</p>
                <nav aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                    <?php
                      if($id > 0){
                        ?> 
                          <li class="page-item"><a class="page-link" onclick="cambiarPagina({{ $id }})" style="cursor: pointer">Previous</a></li>
                        <?php
                      }
                    ?>
                    @php
                      $currentPage = $id + 1;
                      $lastPage = $pages;
                    @endphp

                    {{-- Mostrar primera página siempre --}}
                    @if ($currentPage > 3)
                      <li class="page-item">
                        <button class="page-link" onclick="cambiarPagina(1)">1</button>
                      </li>
                    @endif

                    {{-- Mostrar "..." si estamos lejos de la primera página --}}
                    @if ($currentPage > 3)
                      <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    {{-- Rango dinámico centrado en la página actual --}}
                    @for ($i = max(1, $currentPage - 2); $i <= min($lastPage, $currentPage + 1); $i++)
                      @if ($i == $currentPage)
                        <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
                      @else
                        <li class="page-item">
                          <button class="page-link" onclick="cambiarPagina({{ $i }})">{{ $i }}</button>
                        </li>
                      @endif
                    @endfor

                    {{-- Mostrar "..." si faltan páginas al final --}}
                    @if ($currentPage < $lastPage - 3)
                      <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif

                    {{-- Mostrar última página siempre --}}
                    @if ($currentPage < $lastPage - 2)
                      <li class="page-item">
                        <button class="page-link" onclick="cambiarPagina({{ $lastPage }})">{{ $lastPage }}</button>
                      </li>
                    @endif
                     <?php
                      if($id < $pages -1){
                        ?> 
                          <li class="page-item"><a class="page-link" onclick="cambiarPagina({{ $id+=2}})" style="cursor: pointer">Next</a></li>
                        <?php
                      }
                    ?>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>

      <!-- Modal CREAR USUARIO -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar usuario</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" enctype="multipart/form-data" id="formAddUser" action="{{route(name: 'addUser')}}">
                  @csrf
                  @method('POST')
               <div class="row">
                  <div class="mb-3">
                      <label for="profilePic" class="form-label">Imagen de perfil</label>
                      <input type="file" class="form-control" id="avatar" name="avatar">
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label" for="firstName">Nombres</label>
                      <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstNameHelp" placeholder="Ingrese sus nombres"/>
                    </div>
                      <div class="mb-3">
                      <label class="form-label" for="lastName">Apellidos</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastNameHelp" placeholder="Ingrese sus apellidos"/>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Número de teléfono</label>
                      <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="e.g. 000000000" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                    </div>
                    <input type="hidden" name="addUser" value="addUser">
                  </div>
                </div>
                 <div class="modal-footer px-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                 </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  @include('layouts.footer')
  <!-- Required Js -->
  @include('layouts.scripts')
  <!-- [Page Specific JS] start -->

 
  <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
      
    })
  </script>
<script>
  function cambiarPagina(pagina) {
    const nuevaURL = `/user_list/${pagina}`;
    history.pushState({}, '', nuevaURL);

    fetch(nuevaURL)
      .then(res => res.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');

        const nuevoTbody = doc.querySelector('#pc-dt-simple tbody');
        const nuevaPaginacion = doc.querySelector('.pagination');
        const nuevaLeyenda = doc.querySelector('p.mb-0'); // "Mostrando 1 de 5..."

        // Reemplazar la tabla
        document.querySelector('#pc-dt-simple tbody').innerHTML = nuevoTbody.innerHTML;

        // Reemplazar la paginación
        document.querySelector('.pagination').innerHTML = nuevaPaginacion.innerHTML;

        // Reemplazar leyenda (opcional)
        document.querySelector('p.mb-0').innerHTML = nuevaLeyenda.innerHTML;
      })
      .catch(error => {
        console.error("Error al cargar la nueva página:", error);
      });
  }
</script>
  <!-- [Page Specific JS] end -->


</body>
<!-- [Body] end -->

</html>