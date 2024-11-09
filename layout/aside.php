 <!-- Authorisation -->
 <li class="nav-item has-treeview">
          <a href="#"
            class="nav-link <?php echo (strpos($current_route, 'autorisation') !== false) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-user-lock"></i>
            <p>
              Autorisations
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/autorisation/Autorisations/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Autorisations') !== false) ? 'active' : ''; ?>">
                <i class="far fa-check-circle nav-icon"></i>
                <p>Autorisation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{" rooute('roles.index)"}}"
                class="nav-link {{ Request::routeIs('roles.inedx') ? 'active' : '' }}">
                <i class="far fa-user-circle nav-icon"></i>
                <p>Rôle</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/autorisation/Controllers/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Controllers') !== false) ? 'active' : ''; ?>">
                <i class="fas fa-gamepad nav-icon"></i>
                <p>Controllers</p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="/autorisation/Actions/index.php"
                class="nav-link <?php echo (strpos($current_route, 'Actions') !== false) ? 'active' : ''; ?>">
                <i class="fas fa-cogs nav-icon"></i>
                <p>Actions</p>
              </a>
            </li>
          </ul>
        </li>