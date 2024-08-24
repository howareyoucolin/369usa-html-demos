<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Header Styles */
    .navbar {
        background-color: white;
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        max-width: 100%;
        margin: 0;
    }

    .navbar-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .navbar-logo img {
        height: 32px;
        margin-right: 12px;
    }

    .navbar-logo span {
        font-size: 24px;
        font-weight: 600;
        white-space: nowrap;
        color: #000;
    }

    .navbar .logo {
        font-size: 24px;
        margin: 0;
        padding: 24px 0;
        font-weight: normal;
        color: #000;
        width: 100%;
        border-bottom: 1px solid #e5e7eb;
    }

    .navbar .logo h1 {
        margin: 0;
    }

    /* Menu Styles */
    .navbar-menu {
        background-color: #ffffff;
    }

    .navbar-menu ul {
        list-style-type: none;
        padding: 16px 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 32px;
    }

    .navbar-menu .logo {
        list-style: none;
    }

    .navbar-menu a {
        text-decoration: none;
        color: #1f2937;
        font-size: 16px;
        padding: 8px 12px;
    }

    .navbar-menu a.active {
        color: #3b82f6;
    }

    .navbar-menu a:hover {
        background-color: #f3f4f6;
    }

    /* Mobile Styles */
    .navbar-mobile {
        width: 100%;
        display: none;
        justify-content: space-between;
        align-items: center;
        padding: 0 16px;
    }

    .navbar-toggle {
        display: none;
        width: 40px;
        height: 40px;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        background-color: transparent;
        border: none;
    }

    .navbar-toggle svg {
        width: 24px;
        height: 24px;
    }

    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            padding: 0;
        }

        .navbar-mobile {
            display: flex;
        }

        .navbar-logo {
            margin: 0;
        }

        .navbar .logo {
            display: none;
        }

        .navbar-menu {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            top: 70px;
            z-index: 9999;
        }

        .navbar-menu ul {
            flex-direction: column;
            background-color: #f9fafb;
            padding: 16px;
            gap: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-menu.show {
            display: flex;
        }

        .navbar-toggle {
            display: flex;
        }
    }
</style>

<nav class="navbar">
    <!-- Mobile Layout -->
    <div class="navbar-mobile">
        <div class="navbar-logo">
            <a href="#">
                <img src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo" />
            </a>
        </div>
        <button class="navbar-toggle" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>

    <!-- Desktop Layout -->
    <div class="logo">
        <a href="https://flowbite.com/">
            <img src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo" />
        </a>
        <h1>Best Nail Spa in NYC</h1>
    </div>


    <div class="navbar-menu" id="navbar-menu">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById("navbar-menu");
        slideToggle(menu, 200);
    }

    /* Slide Toggle JS */
    function slideUp(target, duration = 500) {
        target.style.transitionProperty = 'height, margin, padding';
        target.style.transitionDuration = duration + 'ms';
        target.style.boxSizing = 'border-box';
        target.style.height = target.offsetHeight + 'px';
        target.offsetHeight;
        target.style.overflow = 'hidden';
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        window.setTimeout(() => {
            target.style.display = 'none';
            target.style.removeProperty('height');
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    }

    function slideDown(target, duration = 500) {
        target.style.removeProperty('display');
        let display = window.getComputedStyle(target).display;
        if (display === 'none') display = 'block';
        target.style.display = display;
        let height = target.offsetHeight;
        target.style.overflow = 'hidden';
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        target.offsetHeight;
        target.style.boxSizing = 'border-box';
        target.style.transitionProperty = "height, margin, padding";
        target.style.transitionDuration = duration + 'ms';
        target.style.height = height + 'px';
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        window.setTimeout(() => {
            target.style.removeProperty('height');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    }

    function slideToggle(target, duration = 500) {
        if (window.getComputedStyle(target).display === 'none') {
            return slideDown(target, duration);
        } else {
            return slideUp(target, duration);
        }
    }
</script>