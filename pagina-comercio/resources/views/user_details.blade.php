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
                                <h2 class="mb-0">User Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                {{ $user['avatar'] }}
                <!-- [ form-element ] start -->
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h5>User information</h5>
                        </div>
                        <div class="card-body">
                            @if ($user !== [])
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                            <img src="{{ $user['avatar'] }}" alt="Profile Picture" class="rounded-circle img-thumbnail w-100 h-100 object-fit-cover">
                                        </div>
                                        <small class="d-block text-muted mt-2">Profile Picture</small>
                                    </div>

                                    <div class="col-md-8">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Name:</label>
                                                <input type="text" class="form-control" placeholder="Enter full name" value="{{ $user['name'] }}" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Lastname:</label>
                                                <input type="text" class="form-control" placeholder="Enter full name" value="{{ $user['lastname'] }}" disabled />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email:</label>
                                                <input type="email" class="form-control" placeholder="Enter email" value="{{ $user['email'] }}" disabled />
                                            </div>
                                            <div class="mb-3">              
                                                <label class="form-label">Phone number</label>
                                                @if (empty($user['phone_number']))
                                                    <input type="text" class="form-control" placeholder="Enter Password" value="Sin número de teléfono" disabled />
                                                @else
                                                    <input type="text" class="form-control" placeholder="Enter Password" value="{{ $user['phone_number'] }}" disabled />
                                                @endif
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label">Language:</label>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl1" checked />
                                                    <label class="form-check-label" for="customCheckinl1">English</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl2" />
                                                    <label class="form-check-label" for="customCheckinl2">French</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input input-primary" id="customCheckinl3" />
                                                    <label class="form-check-label" for="customCheckinl3">Dutch</label>
                                                </div>
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