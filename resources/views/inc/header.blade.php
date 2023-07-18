<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="mailto:support@flygo.com"><img src="images/mail.png" alt=""> <span>support@flygo.com</span></a></li>
                        <li class="list-inline-item"><a href="tel:+96612345678901"><img src="images/phones.png" alt=""> <span>+966 123 4567 8901</span></a></li>
                    </ul>
                </div>

                <div class="col-8 col-md-6 text-end">
                    @include('inc.language')
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl bg-white">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#hero">{{ __("Home")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">{{__("Services")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#deals">{{__("Top Deals")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">{{__("Gallery")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#package">{{__("Package")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">{{__("Blog")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">{{__("Contact")}}</a>
              </li>
            </ul>
            <a href="{{ route('login') }}" class="btn btn-warning uppercase">{{__("Login")}}</a>
            <a href="{{ route('register') }}" class="btn btn-primary uppercase ml-1 py-2 px-3">{{__("Register")}}</a>
          </div>
        </div>
      </nav>

</header>