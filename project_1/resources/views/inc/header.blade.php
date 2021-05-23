<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Верхняя панель навигации</font></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключить навигацию">
      <span class="navbar-toggler-icon"></span>
    </button> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Главная</font>
                        </font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">О нас</font>
                        </font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Продукты</font>
                        </font>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Контакты</font>
                        </font>
                    </a>
                </li>
            </ul>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success" type="submit">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Поиск</font>
                </font>
            </button>
        </form>
    </div>
</nav>
