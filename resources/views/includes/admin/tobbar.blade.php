  <header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler  waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            
            <a class="navbar-brand" href="/home">
             
                <span class="logo-text">
                   <!-- dark Logo text -->
                   <img src="{{asset('assets/images/logo.png')}}" alt="homepage" class="light-logo" />

               </span>
               
           </a>
           
           <a class="topbartoggler d-block d-md-none  waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
       </div>
       
       <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
        
        <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler  waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>

        </ul>
        
        <ul class="navbar-nav float-right">
         
         
         
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle text-muted  waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="@if(isset($data->img)) {{asset($data->img)}} @else 
                    {{asset('assets/images/users/1.jpg')}} @endif" alt="user" class="rounded-circle" width="31"></a>

                    <div class="dropdown-menu dropdown-menu-right user-dd animated">

                        <a class="dropdown-item" href="/profile"><i class="ti-user m-r-5 m-l-5"></i> Mi Perfil</a>

                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{url('logout')}}">
                            @csrf

                            <button type="submit" class="dropdown-item" ><i class="fa fa-power-off m-r-5 m-l-5"></i> Cerrar Sesíon</button>
                        </form>
                        

                    </div>
                </li>
                
            </ul>
        </div>
    </nav>
</header>