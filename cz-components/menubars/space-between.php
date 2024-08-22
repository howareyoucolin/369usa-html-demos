<script>
    /* SLIDE UP */
    let slideUp = (target, duration = 500) => {

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
            //alert("!");
        }, duration);
    }

    /* SLIDE DOWN */
    let slideDown = (target, duration = 500) => {

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

    /* TOOGLE */
    var slideToggle = (target, duration = 500) => {
        if (window.getComputedStyle(target).display === 'none') {
            return slideDown(target, duration);
        } else {
            return slideUp(target, duration);
        }
    }
</script>
<style>
    .navbar {
        background-color: white;
        border-bottom: 1px solid #e5e7eb;
        padding: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 100%;
        margin: 0;
    }

    .navbar.dark {
        background-color: #1f2937;
        border-color: #374151;
    }

    .navbar a {
        text-decoration: none;
        color: inherit;
    }

    .navbar-logo {
        display: flex;
        align-items: center;
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

    .navbar-logo span.dark {
        color: #fff;
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
        /* border-radius: 8px; */
    }

    .navbar-toggle svg {
        width: 20px;
        height: 20px;
    }

    .navbar-menu ul {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 32px;
        margin: 0;
    }

    .navbar-menu li {
        list-style: none;
    }

    .navbar-menu a {
        display: block;
        padding: 8px 12px;
        color: #1f2937;
        /* border-radius: 8px; */
    }

    .navbar-menu a.active {
        color: #3b82f6;
        background-color: #fff;
    }

    .navbar-menu a:hover {
        background-color: #f3f4f6;
    }

    .navbar-menu a.dark {
        color: #fff;
    }

    .navbar-menu a:hover.dark {
        background-color: #374151;
    }

    .navbar-menu a.active.dark {
        color: #3b82f6;
    }

    @media (max-width: 768px) {

        .navbar-menu {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            top: 90px;
        }

        .navbar-menu ul {
            flex-direction: column;
            background-color: #f9fafb;
            padding: 16px;
            /* border-radius: 8px; */
            gap: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-menu.dark {
            background-color: #1f2937;
        }

        .navbar-toggle {
            display: flex;
        }

        .navbar-menu.show {
            display: flex;
        }
    }
</style>
<nav class="navbar">
    <div class="navbar-logo">
        <a href="https://flowbite.com/">
            <img src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo" />
            <span class="dark">Flowbite</span>
        </a>
    </div>
    <button class="navbar-toggle" onclick="toggleMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
        </svg>
    </button>
    <div class="navbar-menu" id="navbar-menu">
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Aboutz</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById("navbar-menu");
        // menu.classList.toggle("show");
        slideToggle(menu, 200);
    }
</script>