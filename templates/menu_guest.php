<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Welcome!</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Showevents" ? " active" : "" ?>"
           href="?type=Showevents&action=show">UPCOMING EVENTS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
           href="?type=Aut&action=show">Войти</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
           href="?type=Aut&action=showreg">Регистрация</a>
    </nav>
</header>
