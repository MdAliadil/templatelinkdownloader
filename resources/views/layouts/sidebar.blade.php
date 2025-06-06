 <div class="iq-sidebar">
     <div class="iq-navbar-logo d-flex justify-content-between">
         <a href="{{ route('welcomedashboard') }}" class="header-logo">
             <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded" alt="">
             <span>FlipDeck</span>
         </a>
         <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                 <div class="main-circle"><i class="ri-menu-line"></i></div>
                 <div class="hover-circle"><i class="ri-close-fill"></i></div>
             </div>
         </div>
     </div>
     <div id="sidebar-scrollbar">
         <nav class="iq-sidebar-menu">
             <ul id="iq-sidebar-toggle" class="iq-menu">
                 <li>
                     <a href="{{ route('welcomedashboard') }}" class="iq-waves-effect"  ><span
                             class="ripple rippleEffect"></span><i
                             class="las la-home iq-arrow-left"></i><span>Dashboard</span><i
                             class="ri-arrow-right-s-line iq-arrow-right"></i></a>

                 </li>
                  <li>
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                             class="ripple rippleEffect"></span><i
                             class="las  iq-arrow-left"></i><span>My Cards</span><i
                             class="ri-arrow-right-s-line iq-arrow-right"></i></a>

                 </li>
                  <li>
                     <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                             class="ripple rippleEffect"></span><i
                             class="las  iq-arrow-left"></i><span>Saved Cards</span><i
                             class="ri-arrow-right-s-line iq-arrow-right"></i></a>

                 </li>
                
                
             </ul>
         </nav>
         <div class="p-3"></div>
     </div>
 </div>
