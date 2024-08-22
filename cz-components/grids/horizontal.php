<style>
    .horizontal-grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .horizontal-grid-container .card {
        display: flex;
        flex-direction: column;
        background-color: white;
        border: 1px solid #d5d7db;
        color: #2c3e50;
    }

    .horizontal-grid-container .card img {
        height: 24rem;
        width: 100%;
        object-fit: cover;
    }

    .horizontal-grid-container .card .content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 1.5rem;
        flex: 1;
    }

    .horizontal-grid-container .card .title {
        margin-bottom: 0.5rem;
        font-size: 1.25rem;
        font-weight: 500;
    }

    .horizontal-grid-container .card .text {
        margin-bottom: 1rem;
    }

    .horizontal-grid-container .card .updated {
        color: rgba(44, 62, 80, 0.75);
    }

    /* Media Queries for responsive behavior */
    @media (min-width: 768px) {
        .horizontal-grid-container .card {
            flex-direction: row;
        }

        .horizontal-grid-container .card img {
            height: 320px;
            width: 40%;
        }

        .horizontal-grid-container .card .content {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }
</style>

<div class="horizontal-grid-container">

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

    <div class="card">
        <img src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg" alt="Card Image" />
        <div class="content">
            <h5 class="title">Card title</h5>
            <p class="text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content
                is
                a little bit longer.
            </p>
            <p class="updated">Last updated 3 mins ago</p>
        </div>
    </div>

</div>