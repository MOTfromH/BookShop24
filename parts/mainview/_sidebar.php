
<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-grid-alt"></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">BookShop24</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                   data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="lni lni-protection"></i>
                    <span>Login</span>
                </a>
                <form action="index.html" method="post">
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">

                        <li><label for="exampleFormControlInput1" class="form-label ms-4 text-light">Benutzername</label>
                            <input type="text" class="form-control w-75 ms-4" id="exampleFormControlInput1" placeholder="Benutzername" name="username">

                        </li>
                        <li><label for="exampleFormControlInput2" class="form-label ms-4 text-light">Passwort</label>
                            <input type="password" class="form-control w-75 ms-4" id="exampleFormControlInput2" placeholder="Passwort" name="password">

                        </li>
                        <li>
                            <button class="btn btn-warning text-light mt-2 ms-4">Login</button>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul></form>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-agenda"></i>
                    <span>Task</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                   data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                    <i class="lni lni-layout"></i>
                    <span>Multi Level</span>
                </a>
                <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                           data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                            Two Links
                        </a>
                        <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Link 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Link 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-popup"></i>
                    <span>Notification</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <div class="main p-3">
        <div class=" container-fluid p-0 position-relative ">

            <img class="img-fluid w-100" src="assets/img/banner01.jpg" alt="Speicherstadt mit digitalen Elementen">
            <div class="banner_txt mt-4">
                <h1></h1>
            </div>
        </div>

