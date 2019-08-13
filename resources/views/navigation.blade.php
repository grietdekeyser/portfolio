<nav class="menu">
    <p>
        <a href="/">Griet De Keyser</a>
    </p>
    <ul>   
        <input type="checkbox" id="menu">
        <label for="menu">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
        </label>
        <li @if (isset($active) && $active == "about") class="active" @endif>
            <a href="/overmij">Over mij</a>
        </li>
        <li class="submenu @if (isset($active) && $active == "education") active @endif">
            <a href="/opleiding" class="submenu">Opleiding</a>
            <input type="checkbox" id="submenu">
            <label for="submenu">
                <i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i>
            </label>
            <ul class="submenu">
                <li @if (isset($active2) && $active2 == "general") class="active" @endif>
                    <a href="/opleiding/algemeneopleiding">Algemene opleiding</B></a>
                </li>
                <li @if (isset($active2) && $active2 == "php") class="active" @endif>
                    <a href="/opleiding/php">PHP</a>
                </li>
                <li @if (isset($active2) && $active2 == "laravel") class="active" @endif>
                    <a href="/opleiding/laravel">Laravel</a>
                </li>
            </ul>
        </li>
        <li @if (isset($active) && $active == "contact") class="active" @endif>
            <a href="/contact">Contact</a>
        </li>
    </ul>
</nav>
