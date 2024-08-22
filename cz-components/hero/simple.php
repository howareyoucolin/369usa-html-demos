<style>
    .hero-section {
        width: 100%;
        height: 18rem;
        background-size: cover;
        background-position: center;
        background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
    }

    .hero-section .overlay {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
        background-color: rgba(55, 65, 81, 0.5);
    }

    .hero-section .text-center {
        text-align: center;
    }

    .hero-section .hero-title {
        color: white;
        font-size: 1.5rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    @media (min-width: 768px) {
        .hero-section .hero-title {
            font-size: 2rem;
        }
    }

    .hero-section .underline {
        text-decoration: underline;
        color: #60A5FA;
    }

    .hero-section .hero-button {
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        background-color: #2563EB;
        color: white;
        font-size: 0.875rem;
        font-weight: 500;
        text-transform: uppercase;
        border-radius: 0.375rem;
        cursor: pointer;
        outline: none;
        border: none;
    }

    .hero-section .hero-button:hover {
        background-color: #3B82F6;
    }

    .hero-section .hero-button:focus {
        background-color: #3B82F6;
    }
</style>

<div class="hero-section">
    <div class="overlay">
        <div class="text-center">
            <h1 class="hero-title">Build Your new <span class="underline">Saas</span></h1>
            <button class="hero-button">Start project</button>
        </div>
    </div>
</div>