<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Learning Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 15px;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .card-progress {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="p-3">
                    <h4 class="text-white mb-4">LearnDash</h4>
                    <a href="#">📊 Dashboard</a>
                    <a href="#">📚 Courses</a>
                    <a href="#">📝 Assignments</a>
                    <a href="#">💬 Messages</a>
                    <a href="#">⚙️ Settings</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Welcome back, Jaber 👋</h2>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-info text-dark">3 New Notifications</span>
                        <img src="https://via.placeholder.com/40" class="rounded-circle" alt="User" />
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Course Progress -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body card-progress">
                                <h5 class="card-title">Cybersecurity Basics</h5>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-success" style="width: 70%;">70%</div>
                                </div>
                                <p class="text-muted mb-0">14 of 20 lessons completed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Course Progress -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body card-progress">
                                <h5 class="card-title">Laravel Fundamentals</h5>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-primary" style="width: 50%;">50%</div>
                                </div>
                                <p class="text-muted mb-0">10 of 20 lessons completed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Course Progress -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body card-progress">
                                <h5 class="card-title">Data Structures with Dart</h5>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-warning" style="width: 80%;">80%</div>
                                </div>
                                <p class="text-muted mb-0">8 of 10 lessons completed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Section -->
                <div class="mt-5">
                    <h4>Recent Activity</h4>
                    <ul class="list-group">
                        <li class="list-group-item">📘 Completed lesson: "Stacks in Dart"</li>
                        <li class="list-group-item">📘 Completed quiz: "Laravel Routes"</li>
                        <li class="list-group-item">💬 New message from instructor: "Final project tips"</li>
                    </ul>
                </div>
                <div class="mt-5">
                    <h4>Classrooms</h4>
                    <ul class="list-group">
                        @foreach ($classrooms as $class)
                            <li class="list-group-item">📘 {{$class->name}} | {{$class->subject}} | ({{$class->section}})</li>
                        @endforeach
                    </ul>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>