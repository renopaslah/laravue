<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <style>
        body {
            background-color: lightgray
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://santrikoding.com/ebook" target="_blank">EBOOK</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://santrikoding.com/tutorial-set" target="_blank">TUTORIAL
                                SET</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">POST</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="container mt-5">
            <div class="mt-5">
                <!-- flash message -->
                <div class="card border-0 rounded shadow-sm">
                    <div class="card-body">
                        contact
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
