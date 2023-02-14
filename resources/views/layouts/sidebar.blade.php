<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            @if (Auth::user()->role == 'admin')
    
            <li><a href="{{ route('user-management') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-user-3"></i>
                <span class="nav-text">User Management</span>
            </a>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-user-3"></i>
                <span class="nav-text">User Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="./app-profile.html">Admin</a></li>
                <li><a href="./app-calender.html">Pemohom</a></li>
                <li><a href="./app-calender.html">Verifikator Berkas</a></li>
                <li><a href="./app-calender.html">Verifikator Lapangan</a></li>
                <li><a href="./app-calender.html">Pemberi Rekomendasi</a></li>
            </ul>
        </li> --}}

            @endif
          
            <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-list-1"></i>
                    <span class="nav-text">Riwayat Pengajuan</span>
                </a>
            </li>
            
        </ul>
    </div>
</div>