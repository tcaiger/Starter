<div class="nav__overlay js-overlay"></div>

<nav class="nav js-nav">
    <i class="nav__cross js-close-btn"></i>
    <h5 class="nav__heading">Menu</h5>
    <ul class="nav__list list-unstyled">
        <% loop $Menu(1) %>
            <li class="nav__item">
                <a class="nav__link" href="$Link">$MenuTitle</a>
            </li>
            <li class="nav__item">
                <a class="nav__link" href="#">Page Heading</a>
            </li>
        <% end_loop %>
    </ul>
    <div class="nav__footer">
        <h5 class="nav__heading">Follow Us On Social Media</h5>
        <ul class="nav__socials list-inline">
            <li>
                <a href="#" class="nav__icon">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav__icon">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav__icon">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#" class="nav__icon">
                    <i class="icon-facebook"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
