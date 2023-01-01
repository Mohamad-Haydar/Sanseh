<nav>

    <div class="desktop-nav">
        <!-- yellow bar  -->
        <div class="yello-bar">
            <h4>Shop Your Way To Confidence</h4>
            <div class="help">
                <p class="p-help">Help</p>
                <div class="change-lg">
                    <p>Change Language</p>
                    <img src="../images/eng.png" alt="english" />
                </div>
            </div>
        </div>
        <!-- navigation bar -->
        <div class="nav-bar">
            <div class="container">
                <div class="logo">
                    <a href='/'><img src="/images/sanseh.png" alt="sanseh logo" /></a>
                </div>
                <div class="nav-items">
                    <ul>
                        <li>
                            <a>Men</a>
                        </li>
                        <li>
                            <a>Woman</a>
                        </li>
                        <li>
                            <a>Kids</a>
                        </li>
                        <li>
                            <a>Collection</a>
                        </li>
                        <li>
                            <a>Trends</a>
                        </li>
                    </ul>
                </div>
                <div class="setting-btn">
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <a href="/login?register">
                            <button class="signup-btn">Sign Up</button>
                        </a>
                        <a href="/login?login">
                            <button class="login-btn">Login</button>
                        </a>
                    <?php else : ?>
                        <div class="drop-down">
                            <a href="/cart" class="cart">
                                <?php if (count($_SESSION['card']) > 0) {
                                    echo "<span class='red-number-cart'> " . count($_SESSION['card']) . "</span>";
                                } ?>

                                <img src="/images/cart.png" alt="cart" class="me-3">
                            </a>
                            <img src="/images/name.png" alt="person icon">
                            <img src="/images/arrowDown.png" alt="arrow Down">
                        </div>
                        <div class="drop-down-menu hide">
                            <ul>
                                <li class="nav-my-profile"><img src="/images/user.png" alt=""> My Profile</li>
                                <li><img src="/images/cup.png"> My Orders</li>
                                <li><img src="/images/bell.png" alt=""> Notification</li>
                                <li><img src="/images/database.png" alt=""> Referal</li>
                                <a href="/logout">
                                    <li><img src="/images/bell.png" alt="">Logout</li>
                                </a>
                            </ul>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Phone navbar -->
    <div class="phone-nav">
        <ul>
            <a href="/">
                <li class="nav-icon">
                    <i class="fa-solid fa-house"></i>
                </li>
            </a>
            <a>
                <li class="nav-icon">
                    <i class="fa-solid fa-heart"></i>
                </li>
            </a>
            <a>
                <li class="nav-icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </li>
            </a>
            <a>
                <li class="nav-icon bars">
                    <i class="fa-solid fa-cart-shopping"></i>
                </li>
            </a>
            <li class="nav-icon bars">
                <i class="fa-solid fa-bars open-setting"></i>
            </li>
        </ul>
    </div>

</nav>