<ul class="metismenu" id="side-menu">
    <li>
        <a href="javascript: void(0);">
            <i class="la la-diamond"></i>
            <span>Acceso</span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a  href="extras-profile.html">Roles</a>
            </li>
            <li>
                <a href="extras-timeline.html">Permisos</a>
            </li>
            <li>
                <a @click="menu=usuarios">usuarios</a>
            </li>
        </ul>
    </li>

    <li class="menu-title mt-2">Components</li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-briefcase"></i>
            <span> UI Elements </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a @click="menu=1" href="#">Buttons</a>
            </li>
            <li>
                <a @click="menu=2" href="#">Cards</a>
            </li>
            <li>
                <a @click="menu=3" href="#">Tabs & Accordions</a>
            </li>
        </ul>
    </li>

    <li>
        <a href="widgets.html">
            <i class="la la-coffee"></i>
            <span> Widgets </span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i class="la la-plus-square-o"></i>
            <span> Multi Level </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level nav" aria-expanded="false">
            <li>
                <a href="javascript: void(0);">Level 1.1</a>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-third-level nav" aria-expanded="false">
                    <li>
                        <a href="javascript: void(0);">Level 2.1</a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">Level 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
