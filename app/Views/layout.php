<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Kas RT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 1rem;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar a.active {
            background-color: rgba(255, 255, 255, 0.08);
        }

        .sidebar h4 {
            font-size: 1.6rem;
        }

        .content {
            padding: 20px;
        }

        /* Tambahan untuk garis tabel */
        table,
        th,
        td {
            border: 1px solid #000 !important;
        }

        table {
            border-collapse: collapse !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <div class="text-white text-center bg-secondary rounded py-2 px-3 mx-3 mb-3">
                        <h2 class="mb-0">Kas RT</h2>
                    </div>
                    <a href="/kas" class="<?= current_url(true)->getSegment(1) == 'kas' && (current_url(true)->getTotalSegments() == 1) ? 'active' : '' ?>">Dashboard</a>
                    <a href="/kas/tambah" class="<?= current_url(true)->getSegment(1) == 'kas' && current_url(true)->getSegment(2) == 'tambah' ? 'active' : '' ?>">Tambah iuran</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto col-lg-10 content">
                <?= $this->renderSection('content') ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>