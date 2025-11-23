<?php
require_once 'auth.php';
require_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-people-fill me-2"></i>Total Users</h5>
                    <p class="card-text fs-4">1,234</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-arrow-up-circle-fill me-2"></i>Total Push-ups</h5>
                    <p class="card-text fs-4">56,789</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-phone-fill me-2"></i>Active Devices</h5>
                    <p class="card-text fs-4">890</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Recent Activity
        </div>
        <div class="card-body">
            <p class="card-text">Placeholder for recent activity feed or charts.</p>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>