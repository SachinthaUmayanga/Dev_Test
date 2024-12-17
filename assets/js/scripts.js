

document.addEventListener("DOMContentLoaded", function() {
    fetchMovies();
});

function fetchMovies() {
    fetch('https://api.tvmaze.com/search/shows?q=movie')  // Adjust this URL if needed
        .then(response => response.json())
        .then(data => {
            const movieCollection = document.querySelector('.cards');
            movieCollection.innerHTML = ''; // Clear any previous content

            data.forEach(item => {
                const movie = item.show;
                const movieCard = document.createElement('div');
                movieCard.classList.add('card');
                
                movieCard.innerHTML = `
                    <img src="${movie.image ? movie.image.medium : 'assets/images/default-movie.jpg'}" alt="${movie.name}">
                    <h3>${movie.name}</h3>
                    <p>${movie.summary ? movie.summary.substring(0, 100) + '...' : 'No description available'}</p>
                `;
                
                movieCollection.appendChild(movieCard);
            });
        })
        .catch(error => {
            console.error('Error fetching movies:', error);
        });
}


document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('.search-bar button').addEventListener('click', function() {
        const query = document.getElementById('movie-search').value;
        fetchMovies(query);
    });

    // Initial fetch of movies
    fetchMovies();
});

const hamburger = document.getElementById('hamburger');
const menu = document.querySelector('.menu');

hamburger.addEventListener('click', () => {
    menu.classList.toggle('active');
});
