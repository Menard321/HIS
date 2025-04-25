<?php
// dashboard.php - Admin Dashboard for Health Management System
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require 'db.php';

// Fetch statistics
$stmt = $pdo->query('SELECT COUNT(*) as total_patients FROM patients');
$totalPatients = $stmt->fetch()['total_patients'];

$stmt = $pdo->query('SELECT COUNT(*) as total_appointments FROM appointments');
$totalAppointments = $stmt->fetch()['total_appointments'];

// Fetch upcoming appointments
$stmt = $pdo->prepare('SELECT a.id, p.name AS patient_name, a.appt_date, a.appt_time
  FROM appointments a JOIN patients p ON a.patient_id = p.id WHERE a.appt_date >= CURDATE()
  ORDER BY a.appt_date ASC LIMIT 5');
$stmt->execute();
$upcoming = $stmt->fetchAll();
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Health Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="dashboard.php">HMS Dashboard</a>
      <div class="ml-auto">
        <span class="navbar-text mr-3">Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </nav>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="card text-white bg-success">
            <div class="card-body">
              <h5 class="card-title">Total Patients</h5>
              <p class="card-text display-4"><?= $totalPatients ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="card text-white bg-info">
            <div class="card-body">
              <h5 class="card-title">Total Appointments</h5>
              <p class="card-text display-4"><?= $totalAppointments ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-4">
        <div class="card-header">Upcoming Appointments</div>
        <div class="card-body p-0">
          <table class="table mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Patient</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($upcoming): ?>
                <?php foreach ($upcoming as $appt): ?>
                  <tr>
                    <td><?= htmlspecialchars($appt['id']) ?></td>
                    <td><?= htmlspecialchars($appt['patient_name']) ?></td>
                    <td><?= htmlspecialchars($appt['appt_date']) ?></td>
                    <td><?= htmlspecialchars($appt['appt_time']) ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr><td colspan="4" class="text-center">No upcoming appointments</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
