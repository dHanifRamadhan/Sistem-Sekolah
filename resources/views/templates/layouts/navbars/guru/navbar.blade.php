<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-black" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-black active" aria-current="page">
                    @if (Request::is('dashboard'))
                        Dashboard
                    @elseif (Request::is('jadwal'))
                        Jadwal
                    @elseif(Request::is('mata_pelajaran'))
                        Mata Pelajaran
                    @endif
                </li>
            </ol>
            <h6 class="font-weight-bolder text-black mb-0">
                @if (Request::is('dashboard'))
                    Dashboard
                @elseif (Request::is('jadwal'))
                    Jadwal
                @elseif(Request::is('mata_pelajaran'))
                    Mata Pelajaran
                @endif
            </h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                @if (!Request::is('dashboard') && !Request::is('user-profile'))
                    <form action="" class="d-flex flex-row gap-3">
                        <div class="input-group p-2">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control p-1" placeholder="Type here...">
                        </div>
                        <button type="button" class="btn bg-gradient-primary p-2 mt-3" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>
                        </button>
                    </form>
                @endif
            </div>
            <ul class="navbar-nav  justify-content-end">
                @if (!Request::is('dashboard') && !Request::is('user-profile'))
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>
                @endif
                {{-- <li class="nav-item px-3 d-flex align-items-center">
            <div class="form-check form-switch ps-0 ms-auto my-auto">
              <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
          </li> --}}
            </ul>
        </div>
    </div>
</nav>
