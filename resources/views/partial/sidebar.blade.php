      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{route('cabang.index')}}">
              <i class="now-ui-icons education_atom"></i>
              <p>Cabang</p>
            </a>
          </li>
          <li>
            <a href="{{route('kategori_makanan.index')}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Kategori Makanan</p>
            </a>
          </li>
          <li>
            <a href="{{route('kategori_paket.index')}}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Kategori Paket</p>
            </a>
          </li>
          <li>
            <a href="{{route('makanan.index')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Makanan</p>
            </a>
          </li>
          <li>
            <a href="{{route('paket.index')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Paket</p>
            </a>
          </li>

          <li>
            <a href="{{route('testimoni.index')}}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Testimoni</p>
            </a>
          </li>          
                    <li>
            <a href=" <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                        
              <i class="now-ui-icons users_single-02"></i>
              <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>    
            
          
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>