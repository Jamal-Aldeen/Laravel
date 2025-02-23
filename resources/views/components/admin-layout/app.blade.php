<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
</head>
<body>

{{--Display success messages--}}
@if (session()->has('success'))
    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container top-0 end-0 p-3">
            <!-- Then put toasts within -->
            <div id="successToast" class="toast text-white bg-success toast-custom" role="alert" aria-live="assertive"
                 aria-atomic="true">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endif

<div class="d-flex">
    <!-- Sidebar -->
    <nav class="bg-dark text-white p-3 vh-100" style="width: 250px;">
        <h4 class="mb-4">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">📊 Dashboard</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">🛍️ Products</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">📂 Categories</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">👥 Users</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">📦 Orders</a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">⚙️ Settings</a>
            </li>
            <li class="nav-item mt-4">
                <form action="#" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid p-4" style="flex: 1;">
        {{ $slot }}
    </div>
</div>


{{--<div class="container">--}}
{{--    {{ $slot }}--}}
{{--</div>--}}

<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let successToast = document.getElementById('successToast');
        if (successToast) {
            let toast = new bootstrap.Toast(successToast);
            toast.show();
            setTimeout(() => {
                toast.hide();
            }, 4000); // hide toast after 3 seconds
        }
    });
</script>
</body>
</html>
