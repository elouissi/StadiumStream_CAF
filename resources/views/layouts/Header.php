<header>
        <nav class="nav">
            <div class="logo-container">
                <img class="logo__img" src="<?= URL_DIR ?>public/svgs/brand-logo.svg" alt="StadiumStream logo">
                <p class="logo__label">StadiumStream</p>
            </div>
            <div class="nav__links">
                <ul>
                    <li><a href="/streamstadium/home/index">Home</a> </li>
                    <li><a href="/streamstadium/match/match">Matchs</a></li>

                    <li><a href="/streamstadium/auth/contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav__group__burger">
                <a class="nav__group__btn">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                </a>
            </div>

            <div class="nav__actions">
                <?php if(isset($_SESSION['id_user'])){ ?>
                    <a href="/StreamStadium/Auth/profile" class="btn btn-primary"><?= $_SESSION['name']?></a>
                    <a href="/StreamStadium/Auth/log_out" class="nav__actions__login">Log out</a>
                <?php } else{ ?>
                   <a href="/StreamStadium/Auth/sign_in" class="nav__actions__login">Log In</a>
                   <a href="/StreamStadium/Auth/register" class="nav__actions__signup">Sign Up</a>
                <?php } ?>
            </div>

        </nav>
        <nav class="side__nav side__nav--active">
            <div class="side_nav__header">
                <div class="logo-container">

                    <img class="logo__img" src="<?= URL_DIR ?>public/svgs/brand-logo.svg" alt="StadiumStream logo">

                    <p class="logo__label">StadiumStream</p>
                </div>
                <div class="nav__group__burger">
                    <a class="side_nav__group__btn">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    </a>
                </div>
            </div>
            <div class="side__nav__links">
                <ul>
                    <li>About</li>
                    <li>News</li>
                    <li>Teams</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="side_nav__actions">
                <button class="nav__actions__login">Log In</button>
                <button class="nav__actions__signup">Sign Up</button>
            </div>
        </nav>
    </header>