<style>
    /* Namespace for Docker section */
    .docker-section {
        padding-top: 3rem;
        padding-bottom: 3rem;
        background-color: #ffffff;
    }

    .docker-section .container {
        max-width: 112rem;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .docker-section .header {
        text-align: center;
    }

    .docker-section .header .tagline {
        font-size: 1rem;
        color: #4f46e5;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .docker-section .header p {
        margin-top: 0.5rem;
        font-size: 2.25rem;
        line-height: 1.25;
        font-weight: 800;
        letter-spacing: -0.025em;
    }

    .docker-section .header p.subtitle {
        margin-top: 1rem;
        max-width: 64rem;
        font-size: 1.25rem;
        color: #6b7280;
        margin-left: auto;
        margin-right: auto;
    }

    .docker-section .features {
        margin-top: 2.5rem;
    }

    .docker-section .features dl {
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 2.5rem;
    }

    @media (min-width: 48rem) {
        .docker-section .features dl {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            row-gap: 2.5rem;
            column-gap: 2rem;
        }
    }

    .docker-section .feature-item {
        position: relative;
    }

    .docker-section .feature-item dt {
        margin-left: 4rem;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 500;
    }

    .docker-section .feature-item dt .icon {
        position: absolute;
        left: 0;
        top: 0;
        height: 3rem;
        width: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #4f46e5;
        border-radius: 0.375rem;
        color: #ffffff;
    }

    .docker-section .feature-item dd {
        margin-top: 0.5rem;
        margin-left: 4rem;
    }
</style>

<div class="docker-section">
    <div class="container">
        <div class="header">
            <p class="tagline">Our Blog</p>
            <h2>Latest Posts</h2>
            <p class="subtitle">
                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis
                in accusamus quisquam.
            </p>
        </div>

        <div class="features">
            <dl>
                <div class="feature-item">
                    <dt>
                        <div class="icon">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p>Scalable</p>
                    </dt>
                    <dd>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                        suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                </div>

                <div class="feature-item">
                    <dt>
                        <div class="icon">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <p>Super cool</p>
                    </dt>
                    <dd>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                        suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                </div>

                <div class="feature-item">
                    <dt>
                        <div class="icon">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p>Super easy</p>
                    </dt>
                    <dd>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                        suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                </div>

                <div class="feature-item">
                    <dt>
                        <div class="icon">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <p>Great support</p>
                    </dt>
                    <dd>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                        suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>