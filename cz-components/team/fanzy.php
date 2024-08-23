<style>
    .team-section .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* Center vertically */
        gap: 2rem;
        /* Space between elements */
        text-align: center;
        /* Center text horizontally */
    }

    .team-section .text-content {
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    .team-section .description {
        font-size: 1.125rem;
        color: #6b7280;
        /* Gray 500 */
        margin-bottom: 4rem;
    }

    .team-section .cta-button {
        cursor: pointer;
        padding: 0.75rem 2rem;
        width: 15rem;
        background-color: #4f46e5;
        /* Indigo 600 */
        color: #ffffff;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 9999px;
        /* Full rounding */
        text-align: center;
        transition: background-color 0.3s ease;
        display: block;
        margin: 0 auto;
    }

    .team-section .cta-button:hover {
        background-color: #4338ca;
        /* Indigo 700 */
    }

    .team-section .image-gallery {
        width: 100%;
        max-width: 50%;
        margin-top: 4rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(11rem, 1fr));
        gap: 1.5rem;
    }

    .team-section .gallery-item {
        width: 100%;
        height: 14rem;
        border-radius: 1rem;
        /* Rounded corners */
        object-fit: cover;
    }

    /* Responsive adjustments */
    @media (min-width: 768px) {

        .team-section .container {
            max-width: 90rem;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .team-section .content {
            flex-direction: row;
            align-items: center;
            /* Center vertically in larger screens */
            gap: 4rem;
        }

        .team-section .text-content {
            text-align: left;
            max-width: 100%;
            margin: 0;
        }

        .team-section .align-higher {
            margin-top: -5rem;
            /* Adjust to align higher */
        }
    }
</style>

<section class="team-section">
    <div class="container">
        <div class="content">
            <div class="text-content">
                <h2>
                    Our leading, strong & creative team
                </h2>
                <p class="description">
                    These people work on making our product best. These people work on making our product
                    best.#111827These people work on making our product best.
                </p>
                <button class="cta-button">
                    Join our team
                </button>
            </div>
            <div class="image-gallery">
                <img src="https://pagedone.io/asset/uploads/1696238644.png" alt="Team member" class="gallery-item" />
                <img src="https://pagedone.io/asset/uploads/1696238665.png" alt="Team member"
                    class="gallery-item align-higher" />
                <img src="https://pagedone.io/asset/uploads/1696238684.png" alt="Team member" class="gallery-item" />
                <img src="https://pagedone.io/asset/uploads/1696238702.png" alt="Team member" class="gallery-item" />
                <img src="https://pagedone.io/asset/uploads/1696238720.png" alt="Team member"
                    class="gallery-item align-higher" />
                <img src="https://pagedone.io/asset/uploads/1696238737.png" alt="Team member" class="gallery-item" />
            </div>
        </div>
    </div>
</section>