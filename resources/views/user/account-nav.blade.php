<ul class="account-nav">
            <li><a href="{{ route('user.index') }}" class="menu-link menu-link_us-s">Dashboard</a></li>
            <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
            
            <li><a href="/wishlist" class="menu-link menu-link_us-s">Wishlist</a></li>
           
            <li>
                 <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <a href="l{{ route('logout') }}" class="menu-link menu-link_us-s" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                </form>    
            </li>
          </ul> 