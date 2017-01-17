<nav class="c-nav">
    <div class="row">
        <div class="col-sm-12">
            <ul class="c-nav__list list-unstyled">
                <% loop $Menu(1) %>
                    <li class="c-nav__item">
                        <a class="c-nav__link" href="$Link">$MenuTitle</a>
                    </li>
                <% end_loop %>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">Why Climate House?</a>
                </li>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">About</a>
                </li>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">About</a>
                </li>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">About</a>
                </li>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">About</a>
                </li>
                <li class="c-nav__item">
                    <a class="c-nav__link" href="#">Contact</a>
                </li>
            </ul>
            <div class="c-nav__footer">
                <ul class="c-nav__contact">
                    <li><a href="#">Sarah: 021 102 4851</a></li>
                    <li><a href="#">enquiries@climatehouse.co.nz</a></li>
                </ul>
                <ul class="c-nav__socials list-inline">
                    <li>
                        <a href="#" class="c-icon__holder">
                            <i class="c-icon icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="c-icon__holder">
                            <i class="c-icon sm white icon-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
