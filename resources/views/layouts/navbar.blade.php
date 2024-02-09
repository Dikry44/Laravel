<nav class="navbar navbar-expand-lg " style="background-color: #E48F45;">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Book Management</a> -->
        <a class="navbar-brand" href="#">
            <img src="images/open-book.png" alt="book logo" style="height: 40px; width: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book.index') }}">Book</a>
                </li>
            </ul>
        </div>
    </div>
</nav>