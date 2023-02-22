<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('view.inicio') }}">m y P r o j e c t</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('view.inicio') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.inicio2') }}">Home 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.inicio3') }}">Home 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>