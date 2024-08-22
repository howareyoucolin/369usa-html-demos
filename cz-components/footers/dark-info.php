<style>
    .footer-component {
        margin-top: 5rem;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        position: relative;
        text-align: center;
        background-color: #333;
        /* Blackish background */
        color: white;
    }

    .footer-component .content {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        padding-top: 2rem;
        padding-bottom: 3.5rem;
    }

    .footer-component h2 {
        font-weight: bold;
        font-size: 2rem;
        line-height: 1.2;
        color: #fff;
    }

    .footer-component h2 xl {
        font-size: 2.5rem;
    }

    .footer-component a.button {
        margin-top: 2rem;
        padding-left: 3rem;
        padding-right: 3rem;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        font-size: 1.5rem;
        font-weight: medium;
        line-height: 1.5;
        display: inline-block;
        background-color: #bbb;
        /* Darker button background */
        border-radius: 9999px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid transparent;
        transition: background-color 0.3s ease;
        text-decoration: none;
        color: #373737;
    }

    .footer-component a.button:hover {
        background-color: #fff;
        /* Hover effect */
    }

    .footer-component nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        font-size: 1.125rem;
        font-weight: medium;
    }

    .footer-component nav div {
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .footer-component p {
        margin-top: 1.75rem;
        font-size: 1.25rem;
    }
</style>

<footer class="footer-component">
    <div class="content">
        <h2>Ready to get your productivity back?<br>Start your free trial today.</h2>
        <a class="button" href="#">Get started</a>
        <div class="mt-14 xl:mt-20">
            <nav>
                <div><a href="#">Contact</a></div>
                <div><a href="#">Pricing</a></div>
                <div><a href="#">Privacy</a></div>
                <div><a href="#">Terms</a></div>
                <div><a href="#">Twitter</a></div>
            </nav>
            <p>&copy; developed by <a href="https://369usa.com">369usa</a></p>
        </div>
    </div>
</footer>