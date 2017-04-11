<nav class="nav">
    <ul class="nav__list list-unstyled">
        <% loop $Menu(1) %>
            <li class="nav__item">
                <a class="nav__link" href="$Link">$MenuTitle</a>
            </li>
        <% end_loop %>
        <li class="nav__item">
            <a class="nav__link" href="#">Why Climate House?</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">About</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">About</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">About</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">About</a>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">Contact</a>
        </li>
    </ul>
    <div class="nav__footer">
        <ul class="nav__contact">
            <li><a href="#">Sarah: 021 102 4851</a></li>
            <li><a href="#">enquiries@climatehouse.co.nz</a></li>
        </ul>
        <ul class="nav__socials list-inline">
            <li>
                <a href="#" class="icon__holder">
                    <i class="icon icon-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" class="icon__holder">
                    <i class="icon sm white icon-facebook"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
