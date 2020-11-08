{{-- Sidebar --}}
<div class="sidebar">
    {{-- Sidebar Menu --}}
    <nav class="mt-2">
            {{-- Modulo habitaciones --}}
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('habitacion', 'habitacion/*', 'tipohabitacion', 'tipohabitacion/*', 'nivel', 'nivel/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Documentos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    {{-- Modulo categoria de habitacion --}}
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/habitacion') }}"
                                class="nav-link {{ request()->is('habitacion', 'habitacion/*') ? 'active' : '' }}">
                               &nbsp;&nbsp; <i class="nav-icon fas fa-file-signature"></i>
                                <p>Linea base</p>
                            </a>
                        </li>
                        {{-- Modulo tarifa de habitacion --}}
                        <li class="nav-item">
                            <a href="{{ url('/tipohabitacion') }}"
                                class="nav-link {{ request()->is('tipohabitacion', 'tipohabitacion/*') ? 'active' : '' }}">
                               &nbsp;&nbsp;  <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Carta de compromiso</p>
                            </a>
                        </li>
                        {{-- Modulo de nivel --}}
                        <li class="nav-item">
                            <a href="{{ url('/nivel') }}"
                                class="nav-link {{ request()->is('nivel/*') ? 'active' : '' }}">
                              &nbsp;&nbsp; <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>Diagnostico del negocio</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            {{-- Modulo caja --}}
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/caja') }}" class="nav-link {{ request()->is('caja', 'caja/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Resultados
                        </p>
                    </a>
                </li>
            </ul>


    </nav>
    {{-- Fin sidebar menu --}}
</div>
{{-- Fin sidebar --}}
