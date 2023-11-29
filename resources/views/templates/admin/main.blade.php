<!DOCTYPE html>
<html lang="en">
    @include('templates.admin.header')
<body>
    @include('templates.admin.nav')
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('templates.admin.sidebar')
            <!-- partial:partials/_sidebar.html -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" id="content-web-page">
                    @include('templates.admin.alert')
                    @yield('content')
                  </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('templates.admin.footer')
</body>

</html>
