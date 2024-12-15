// document.addEventListener("DOMContentLoaded", () => {
//     const searchBtn = document.getElementById("searchBtn");
//     const searchInput = document.getElementById("searchInput");
//     const movieGrid = document.getElementById("movieGrid");

//     searchBtn.addEventListener("click", async () => {
//         const query = searchInput.value.trim();
//         if (query) {
//             const apiUrl = `https://api.tvmaze.com/search/shows?q=${query}`;
//             const response = await fetch(apiUrl);
//             const data = await response.json();

//             movieGrid.innerHTML = ""; // Clear previous results

//             data.forEach(item => {
//                 const movie = item.show;
//                 const movieItem = `
//                     <div class="movie-item">
//                         <img src="${movie.image ? movie.image.medium : 'placeholder.jpg'}" alt="${movie.name}">
//                         <h3>${movie.name}</h3>
//                         <p>${movie.summary ? movie.summary.replace(/<[^>]+>/g, '') : "No description available."}</p>
//                     </div>
//                 `;
//                 movieGrid.insertAdjacentHTML('beforeend', movieItem);
//             });
//         }
//     });
// });

// // Hamburger Menu Toggle
// document.querySelector('.hamburger').addEventListener('click', function () {
//     document.querySelector('.menu').classList.toggle('show');
// });

// // Form Submission (AJAX)
// document.querySelector('#contact-form').addEventListener('submit', function (e) {
//     e.preventDefault();
//     const formData = new FormData(this);

//     fetch('backend/process_form.php', {
//         method: 'POST',
//         body: formData,
//     })
//         .then(response => response.json())
//         .then(data => {
//             alert(data.message);
//             if (data.status === 'success') {
//                 this.reset();
//             }
//         })
//         .catch(error => console.error('Error:', error));
// });


//Inside the body, after the movie collection section

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

function fetchMovies(query = '') {
    const apiUrl = query ? `https://api.tvmaze.com/search/shows?q=${query}` : 'https://api.tvmaze.com/search/shows?q=movie';
    
    fetch(apiUrl)
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
