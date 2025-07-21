<!doctype html>
<html lang="en">
<!-- [Head] start -->
<title>User detail</title>
@include("layouts.head")

<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    @include('layouts.sidebar')
    @include('layouts.topBar')

    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                                <li class="breadcrumb-item" aria-current="page">User Details</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Edit User</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>User information</h5>
                        </div>
                        <div class="card-body">
                            @if ($user !== [])
                                <div class="row">
                                    <div class="col-md-12  d-flex">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 135px; width: 135px">
                                            @if ($user['avatar_url'] != null)
                                                <img src="{{ $user['avatar_url'] }}" class="rounded-circle img-thumbnail w-100 h-100 object-fit-cover">
                                            @endif
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div style="margin-left: 30px">
                                                <h5 style="font-weight: bolder;">{{ $user['name'] }}</h5>
                                                <p style="font-weight: lighter">{{ $user['email'] }}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex ms-auto align-items-center">
                                            <div>
                                                <button class="btn btn-info me-2">Ver detalles</button>
                                                <button class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"  style="margin-top: 25px;">
                                    <div class="col-md-12">
                                        <form>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Name:</label>
                                                    <input type="text" class="form-control" placeholder="Enter full name" value="{{ $user['name'] }}" disabled />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Lastname:</label>
                                                    <input type="text" class="form-control" placeholder="Enter full name" value="{{ $user['lastname'] }}" disabled />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label">Email:</label>
                                                    <input type="email" class="form-control" placeholder="Enter email" value="{{ $user['email'] }}" disabled />
                                                </div>
                                                <div class="mb-3 col-md-6">              
                                                    <label class="form-label">Phone number</label>
                                                    @if (empty($user['phone_number']))
                                                        <input type="text" class="form-control" placeholder="Enter Password" value="Sin número de teléfono" disabled />
                                                    @else
                                                        <input type="text" class="form-control" placeholder="Enter Password" value="{{ $user['phone_number'] }}" disabled />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="d-flex" style="margin-top: 35px">
                                                <button class="btn btn-primary ms-auto">Actualizar usuario</button>
                                            </div>                                           
                                        </form>
                                    </div>
                                </div>
                            
                            @else
                                <p style="text-align: center">No hay información del usuario. Verifica si existe</p>
                            @endif
                           
                        </div>
                    </div>
                </div>

                <!-- [ form-element ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
    @include('layouts.footer')
    <!-- Required Js -->
    @include('layouts.scripts')
    <!-- [Page Specific JS] start -->
</body>
<!-- [Body] end -->

</html>