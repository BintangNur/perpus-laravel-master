<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                @if(Auth::user()->gambar == '')

                  <img src="{{asset('images/user/default.png')}}" alt="profile image">
                @else

                  <img src="{{asset('images/user/'. Auth::user()->gambar)}}" alt="profile image">
                @endif
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;">{{ Auth::user()->level }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item {{ setActive(['/', 'home']) }}"> 
            <a class="nav-link" href="{{url('/')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @if(Auth::user()->level == 'admin')
            <li class="nav-item {{ setActive(['anggota*']) }}">
            <a class="nav-link" href="{{route('anggota.index')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Anggota</span>
            </a>
            <li class="nav-item {{ setActive(['buku*']) }}">
            <a class="nav-link" href="{{route('buku.index')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Buku</span>
            </a>
            <li class="nav-item {{ setActive(['user*']) }}">
            <a class="nav-link" href="{{route('user.index')}}">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">User</span>
            </a>
          @endif