$(document).ready(function() {
    // ---------------------------------------------------
    // Global variables to be used throughout
    // ---------------------------------------------------
    var movieList = [];

    // Load the movie list
    loadMovieList();

    // ---------------------------------------------------
    // Event listners
    // ---------------------------------------------------

    // Attach upload file button click event to function
    $('#uploadFile').on('click', uploadFile);

    // Update the value of current slider on change and re-calculate the movie
    // list to show by calling the dermineMovies() function
    $('.mood-slider').on('input', function () {
        // Value test for slider (not required - testing purposes)
        // $(this).next('p').find('span').text(this.value);
        determineMovies();
    });

    // ---------------------------------------------------
    // Functions
    // ---------------------------------------------------

    function loadMovieList() {
        $.get('getMovieList.php', function (data) {
            movieList = data.programmes;
        });
    }

    function determineMovies() {
        // Grab all the current slider values
        var calmValue = Number($('#calmnessInput').val());
        var happyValue = Number($('#happinessInput').val());
        var alertValue = Number($('#alertnessInput').val());
        var fearlessValue = Number($('#fearlessnessInput').val());

        // Create an array of moods to show
        var moods = [];

        if (calmValue === -1) {
            moods.push('agitated');
        }
        else if (calmValue === 1) {
            moods.push('calm');
        }

        if (happyValue === -1) {
            moods.push('sad');
        }
        else if (happyValue === 1) {
            moods.push('happy');
        }

        if (alertValue === -1) {
            moods.push('tired');
        }
        else if (alertValue === 1) {
            moods.push('alert');
        }

        if (fearlessValue === -1) {
            moods.push('scared');
        }
        else if (fearlessValue === 1) {
            moods.push('fearless');
        }
        
        // Test function determineMovies()
        // console.log(moods);
        
        // Limit the moods to show to 2 (this will take the first 2 so priority is from first slider to last
        moods = moods.slice(0, 2);

        // If all sliders are at the middle position then leave everything as it is
        if (!moods.length) return;

        // Build movies and show the movies
        showMovies(movieList, moods);
    }

    function showMovies(movieList, moodsToShow) {
        // Clear all existing recommendations
        $('.movies-list').empty();

        // Filter movie list to moods we want
        var finalMovies = movieList.filter(function(item) {
            return moodsToShow.indexOf(item.mood) > -1;
        });

        // Only show 5 movies at once
        finalMovies = finalMovies.splice(0, 5);

        // Loop through all movies and build a movie list
        finalMovies.forEach(function(movie, index) {
            // Offset class for first item
            var offsetClass = index === 0 ? 'offset-md-1' : '';

            var movieBox = $(
                '<div class="col-sm-2 ' + offsetClass + '">' +
                    '<div class="card">' +
                        '<div class="card-body movie-image"></div>' +
                        '<div class="card-footer"></div>' +
                    '</div>' +
                '</div>'
            );

            // Set the movie image
            movieBox.find('.card-body').css('background-image', 'url("' + movie.img_path + '")');

            // Set the movie title
            movieBox.find('.card-footer').text(movie.title);

            // Add the movie box
            $('.movies-list').append(movieBox);
        });
    }

    function uploadFile() {
        var file = $('#moviesFile').get(0).files[0];
        var formData = new FormData();
        formData.append('moviesFile', file);

        $.ajax({
            url: 'uploadfct.php',
            data: formData,
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                var modalBody = $('.modal-body');
                var alertMessage = $('<div class="alert" role="alert"></div>');

                // Join all the messages together into a single string and wrap them in <p> tags.
                var messageStr = response.message.map(function(message) {
                    return "<p>" + message + "</p>";
                }).join();

                // Add the correct alert class to the html
                if (response.error) {
                    alertMessage.addClass('alert-danger').html(messageStr);
                }
                else {
                    alertMessage.addClass('alert-success').html(messageStr);

                    // Reload the movie list
                    loadMovieList();
                }

                // Remove any existing alerts
                modalBody.find('.alert').remove();

                // Add success/error message to modal
                modalBody.prepend(alertMessage);
            },
            error: function (response) {
                console.log('error ' + event);
            },
        });

        return false;
    }
});
