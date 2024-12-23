const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});

document.addEventListener("DOMContentLoaded", () => {
    const movieSearchInput = document.getElementById("movie-search");
    const cardContainer = document.getElementById("cardContainer");

    // Function to fetch movies
    async function fetchMovies(query) {
        try {
            const response = await fetch(`https://api.tvmaze.com/search/shows?q=${query}`);
            const data = await response.json();
            displayMovies(data.slice(0,3)); // Limit movies to 3
        } catch (error) {
            console.error("Error fetching movies:", error);
        }
    }

    // Function to display movies in cards
    function displayMovies(movies) {
        cardContainer.innerHTML = ""; // Clear previous results

        if (movies.length === 0) {
            cardContainer.innerHTML = "<p>No movies found.</p>";
            return;
        }

        movies.forEach(movie => {
            const { show } = movie;
            const card = document.createElement("div");
            card.className = "card";
            card.innerHTML = `
                <img src="${show.image ? show.image.medium : 'assets/images/placeholder.png'}" alt="${show.name}">
                <div class="card-body">
                    <h5 class="card-title">${show.name}</h5>
                    <p class="card-text">${show.summary ? show.summary.replace(/<\/?[^>]+(>|$)/g, "") : "No description available."}</p>
                </div>
            `;
            cardContainer.appendChild(card);
        });
    }

    // Event listener for search
    movieSearchInput.addEventListener("input", (e) => {
        const query = e.target.value.trim();
        if (query) {
            fetchMovies(query);
        } else {
            fetchMovies("popular");
        }
    });

    // Initial fetch to display popular movies
    fetchMovies("popular");
});
