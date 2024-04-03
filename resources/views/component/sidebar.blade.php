<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mb-2">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
          <svg width="63" height="60" viewBox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.1875 15.9375C31.1875 23.5314 25.0314 29.6875 17.4375 29.6875H3.6875V15.9375C3.6875 8.34358 9.84358 2.1875 17.4375 2.1875C25.0314 2.1875 31.1875 8.34358 31.1875 15.9375Z" fill="#212A3E" stroke="white" stroke-width="0.625"/>
            <path d="M31.8125 44.0625C31.8125 36.4686 37.9686 30.3125 45.5625 30.3125H59.3125V44.0625C59.3125 51.6564 53.1564 57.8125 45.5625 57.8125C37.9686 57.8125 31.8125 51.6564 31.8125 44.0625Z" fill="#212A3E" stroke="white" stroke-width="0.625"/>
            <path d="M17.4375 57.8125C9.84358 57.8125 3.6875 51.6564 3.6875 44.0625C3.6875 36.4686 9.84358 30.3125 17.4375 30.3125C25.0314 30.3125 31.1875 36.4686 31.1875 44.0625V57.8125H17.4375Z" fill="#5F8D4E" stroke="white" stroke-width="0.625"/>
            <path d="M45.5625 2.1875C53.1564 2.1875 59.3125 8.34358 59.3125 15.9375C59.3125 23.5314 53.1564 29.6875 45.5625 29.6875C37.9686 29.6875 31.8125 23.5314 31.8125 15.9375V2.1875H45.5625Z" fill="#5F8D4E" stroke="white" stroke-width="0.625"/>
            </svg>  
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Simonkes</span>
      </a>


      
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>
    
    <div class="d-flex" style="justify-content: center;flex-direction: column;align-items: center">
      <div class="" style="height: 100px;width: 100px">
        <img src="/image/profil2.jpg" class="rounded-circle" style="object-fit: cover;object-position: 0 0" height="100px" width="100px" alt="">
      </div>
      <p class="m-0">Pasien</p>
      <h4 class="mb-2">Raffi Prabowo</h4>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      @include('admin.component.menu')

    </ul>
  </aside>