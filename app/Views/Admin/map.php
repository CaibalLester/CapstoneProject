<!doctype html>
<html lang="en">

<?= view('head') ?>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<!-- <style>
    .card {
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style> -->

<body>
    <?= view('Admin/chop/header') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/AdDash">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/usermanagement">
                                <i class="fa fa-user me-2"></i>
                                User Management
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/Forms">
                                <i class="bi bi-file-earmark-slides me-2"></i>
                                Forms
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/promotion">
                                <i class="fa fa-user me-2"></i>
                                Promotion
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/confirmation">
                                <i class="bi bi-check-lg me-2"></i>
                                Confirmation
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/sched">
                                <i class="bi bi-check-lg me-2"></i>
                                Schedule
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageAgent">
                                <i class="fas fa-user-tie me-2"></i>
                                Agents
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/ManageApplicant">
                                <i class="fa fa-users me-2"></i>
                                Applicants
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/map">
                                <i class="bi bi-map me-2"></i>
                                Maps
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/AdHelp">
                                <i class="fas fa-hands-helping me-2"></i>
                                Help Center
                            </a>
                        </li>

                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="/plans">
                                <i class="bi bi-hospital me-2"></i>
                                Plans
                            </a>
                        </li>

                        <li class="nav-item border-top mt-auto pt-2">
                            <a class="nav-link" href="/logout">
                                <i class="bi-box-arrow-left me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Map</h1>
                </div>
                <!-- <div class="row m-2">

                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="card col-lg-6 m-3">
                                <div class="card-body text-center">
      
                                    <h6>Applicants</h6>
                                    <div id="map" style="height: 500px;"></div>
                                </div>
                            </div>

                            <div class="card col-lg-6 m-3">
                                <div class="card-body text-center">
                                
                                    <h6>Applicants</h6>
                                    <div id="map" style="height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <div class="card col-lg-5 m-2">
                                <div class="card-body text-center">
                                    <h6>Applicants</h6>
                                    <div id="map" style="height: 500px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-5 m-2">
                                <div class="card-body text-center">
                                    <h6>Agents</h6>
                                    <div id="map2" style="height: 500px;"></div>
                                </div>
                            </div>
                            <div class="card col-lg-10 m-2">
                                <div class="card-body text-center">
                                    <h6>Clients</h6>
                                    <div id="map3" style="height: 500px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of left side -->
            </main>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
    // Initialize the map
    var map = L.map('map', {
        center: [12.345, 121.0],
        zoom: 7,
        scrollWheelZoom: false  // Disable scroll zoom
    });

    // Add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Marker data
    var markersData = [
        { lat: 13.2017, lng: 121.1046, popupText: 'Calapan City' },
            { lat: 12.8518, lng: 121.4153, popupText: 'San Jose' },
            { lat: 13.3773, lng: 121.2195, popupText: 'Roxas' },
            { lat: 12.1393, lng: 121.0488, popupText: 'Abra de Ilog' },
            { lat: 13.5032, lng: 120.9876, popupText: 'Mamburao' },
            { lat: 12.7682, lng: 121.0409, popupText: 'Sablayan' },
            { lat: 12.6233, lng: 121.0493, popupText: 'Mansalay' },
            { lat: 12.3478, lng: 121.0614, popupText: 'Bongabong' },
            { lat: 12.7448, lng: 121.0560, popupText: 'Pinamalayan' },
            { lat: 13.0967, lng: 121.5169, popupText: 'Puerto Galera' }
    ];

    // Add markers to the map
    markersData.forEach(function (marker) {
        L.marker([marker.lat, marker.lng])
            .addTo(map)
            .bindPopup(marker.popupText);
    });

    var map = L.map('map2', {
        center: [12.345, 121.0],
        zoom: 7,
        scrollWheelZoom: false  // Disable scroll zoom
    });

    // Add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Marker data
    var markersData = [
        { lat: 13.2017, lng: 121.1046, popupText: 'Calapan City' },
            { lat: 12.8518, lng: 121.4153, popupText: 'San Jose' },
            { lat: 13.3773, lng: 121.2195, popupText: 'Roxas' },
            { lat: 12.1393, lng: 121.0488, popupText: 'Abra de Ilog' },
            { lat: 13.5032, lng: 120.9876, popupText: 'Mamburao' },
            { lat: 12.7682, lng: 121.0409, popupText: 'Sablayan' },
            { lat: 12.6233, lng: 121.0493, popupText: 'Mansalay' },
            { lat: 12.3478, lng: 121.0614, popupText: 'Bongabong' },
            { lat: 12.7448, lng: 121.0560, popupText: 'Pinamalayan' },
            { lat: 13.0967, lng: 121.5169, popupText: 'Puerto Galera' }
    ];

    // Add markers to the map
    markersData.forEach(function (marker) {
        L.marker([marker.lat, marker.lng])
            .addTo(map)
            .bindPopup(marker.popupText);
    });

    var map = L.map('map3', {
        center: [12.345, 121.0],
        zoom: 7,
        scrollWheelZoom: false  // Disable scroll zoom
    });

    // Add the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Marker data
    var markersData = [
        { lat: 13.2017, lng: 121.1046, popupText: 'Calapan City' },
            { lat: 12.8518, lng: 121.4153, popupText: 'San Jose' },
            { lat: 13.3773, lng: 121.2195, popupText: 'Roxas' },
            { lat: 12.1393, lng: 121.0488, popupText: 'Abra de Ilog' },
            { lat: 13.5032, lng: 120.9876, popupText: 'Mamburao' },
            { lat: 12.7682, lng: 121.0409, popupText: 'Sablayan' },
            { lat: 12.6233, lng: 121.0493, popupText: 'Mansalay' },
            { lat: 12.3478, lng: 121.0614, popupText: 'Bongabong' },
            { lat: 12.7448, lng: 121.0560, popupText: 'Pinamalayan' },
            { lat: 13.0967, lng: 121.5169, popupText: 'Puerto Galera' }
    ];

    // Add markers to the map
    markersData.forEach(function (marker) {
        L.marker([marker.lat, marker.lng])
            .addTo(map)
            .bindPopup(marker.popupText);
    });
</script>


    <?= view('js'); ?>

</body>

</html>