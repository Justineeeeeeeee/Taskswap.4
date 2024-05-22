<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    loadReviews();




// Listen for update review button click
$('#update_review').click(function () {
    var reviewId = $('#edit_review_id').val();
    var userName = $('#edit_username').val();
    var userReview = $('#edit_user_review').val();
    var userRating = $('.submit_star.selected').data('rating');


    // Send AJAX request to update the review
    $.ajax({
        url: '/ratings/' + reviewId,
        type: 'PUT',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            edit_username: userName,
            edit_user_review: userReview,
            edit_user_rating: userRating
        },
        success: function (response) {
            // If successful, reload the reviews
            loadReviews();
            // Close the edit modal
            $('#edit_review_modal').modal('hide');
            // Refresh the page
            window.location.href = window.location.href;
        },
        error: function (xhr, status, error) {
            console.error('Error updating review:', error);
        }
    });
});






// Event listener for delete button click
$(document).on('click', '.delete-rating-item', function () {
    var parentCard = $(this).closest('.card');
    var reviewId = parentCard.data('review-id');






    // Show confirmation modal
    $('#deleteConfirmationModal').modal('show');






    // Set data attribute for review id in modal
    $('#deleteConfirmationModal').data('review-id', reviewId);
});




    // Event listener for close button click to hide modal
    $('#deleteConfirmationModal .close, #deleteConfirmationModal .btn-secondary').click(function () {
        $('#deleteConfirmationModal').modal('hide');
    });




// Event listener for confirming delete
$('#confirmDelete').click(function () {
    var reviewId = $('#deleteConfirmationModal').data('review-id');






    // Send AJAX request to delete the review
    $.ajax({
        url: '/ratings/' + reviewId,
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            // Remove the review card from the HTML upon successful deletion
            $('.card[data-review-id="' + reviewId + '"]').remove();
            // Update other UI elements if needed
            $('#deleteConfirmationModal').modal('hide');
        },
        error: function (xhr, status, error) {
            console.error('Error deleting review:', error);
        }
    });
});








    // Event listener for edit button click
    $(document).on('click', '.edit-rating-item', function () {
        var parentCard = $(this).closest('.card');
        var reviewId = parentCard.data('review-id');
        var userName = parentCard.find('.card-header h3').text().trim();
        var userReview = parentCard.find('.card-body p').text().trim();
        var userRating = parentCard.find('.main_star.text-warning').length;






        $('#edit_review_modal').find('#edit_review_id').val(reviewId);
        $('#edit_review_modal').find('#edit_username').val(userName);
        $('#edit_review_modal').find('#edit_user_review').val(userReview);






        $('#edit_review_modal').find('.submit_star').removeClass('selected text-warning');
        $('#edit_review_modal').find('.submit_star').each(function(index) {
            if(index < userRating) {
                $(this).addClass('selected text-warning');
            }
        });








        $('#edit_review_modal').modal('show');
    });




     // Function to load reviews
     function loadReviews() {
        // Clear previous reviews
        $('#review_content').empty();






        // Initialize variables for counting ratings and reviews
        var totalReviews = 0;
        var totalRating = 0;
        var ratings = {
            '1': 0,
            '2': 0,
            '3': 0,
            '4': 0,
            '5': 0
        };








      



        // Calculate average rating
        var averageRating = totalReviews > 0 ? (totalRating / totalReviews).toFixed(1) : '0.0';




        // Update average rating
        $('#average_rating').text(averageRating);




        // Update the total_review span with the totalReviews count
        $('#total_review').text(totalReviews);




        // Calculate percentage for stars
        var percentage = (averageRating / 5) * 100;






        // Update stars dynamically based on average rating
        $('.main_star').each(function(index) {
            if(index < Math.floor(percentage / 20)) {
                $(this).removeClass('far').addClass('fas'); // Fill the star
            } else {
                $(this).removeClass('fas').addClass('far'); // Empty the star
            }
        });




        // Update progress bars and total star reviews
        updateProgressBar('five_star', ratings['5'], totalReviews);
        updateProgressBar('four_star', ratings['4'], totalReviews);
        updateProgressBar('three_star', ratings['3'], totalReviews);
        updateProgressBar('two_star', ratings['2'], totalReviews);
        updateProgressBar('one_star', ratings['1'], totalReviews);
    }




    // Function to update progress bars and total star reviews
    function updateProgressBar(star, starCount, totalReviews) {
        var progressBarId = '#' + star + '_progress';
        var totalStarReviewId = '#total_' + star + '_review';
        var progressBarWidth = (starCount / totalReviews * 100) + '%';




        $(progressBarId).css('width', progressBarWidth).attr('aria-valuenow', progressBarWidth);
        $(totalStarReviewId).text(starCount);
    }




    // Call the loadReviews function when the page loads
    loadReviews();


    // Listen for review button click to show modal
    $('#add_review').click(function () {
        $('#review_modal').modal('show');
    });




    // Listen for close button click to hide modal
    $('.close').click(function () {
        $('#review_modal').modal('hide');
    });


     // Listen for close button click to hide modal
     $('.close').click(function () {
        $('#edit_review_modal').modal('hide');
    });


    // Listen for star rating selection
    $('.submit_star').click(function () {
        var rating = $(this).data('rating');
        $('.submit_star').removeClass('selected');
        $(this).addClass('selected');
        $('.submit_star').each(function () {
            var starRating = $(this).data('rating');
            if (starRating <= rating) {
                $(this).addClass('text-warning'); // Color the stars up to the selected one
            } else {
                $(this).removeClass('text-warning'); // Remove color from stars beyond the selected one
            }
        });
    });
    // Listen for save review button click
    $('#save_review').click(function () {
        var userName = $('#username').val();
        var userReview = $('#user_review').val();
        var userRating = $('.submit_star.selected').data('rating');






        // You need to replace 'saveReviewToDatabase' with your actual function
        saveReviewToDatabase(userName, userReview, userRating);




// Update rating display
    // The following lines are moved from loadReviews function to here
    var totalReviews = $('#total_review').text();
    var totalRating = parseFloat($('#average_rating').text()) * totalReviews;
    totalReviews++;
    totalRating += userRating;
    var averageRating = (totalRating / totalReviews).toFixed(1);
    $('#average_rating').text(averageRating);








    // Update progress bars and total star reviews
    updateProgressBar('five_star', parseInt($('#total_five_star_review').text()) + (userRating === 5 ? 1 : 0), totalReviews);
    updateProgressBar('four_star', parseInt($('#total_four_star_review').text()) + (userRating === 4 ? 1 : 0), totalReviews);
    updateProgressBar('three_star', parseInt($('#total_three_star_review').text()) + (userRating === 3 ? 1 : 0), totalReviews);
    updateProgressBar('two_star', parseInt($('#total_two_star_review').text()) + (userRating === 2 ? 1 : 0), totalReviews);
    updateProgressBar('one_star', parseInt($('#total_one_star_review').text()) + (userRating === 1 ? 1 : 0), totalReviews);








       // Append the review at the top of the card body
    var newReviewHtml = '<div class="card">' +
        '<div class="card-header">' +
        '<h3>' + userName + '</h3>' +
        '</div>' +
        '<div class="card-body">' +
        '<div class="row">' +
        '<div class="col-sm-4">' +
        '<div class="mb-3">';
    // Append star rating icons with filled stars for user's rating
    for (var i = 0; i < userRating; i++) {
        newReviewHtml += '<i class="fas fa-star star-light mr-1 main_star text-warning"></i>';
    }
    // Append remaining star rating icons (if any)
    for (var j = userRating; j < 5; j++) {
        newReviewHtml += '<i class="fas fa-star star-light mr-1 main_star"></i>';
    }
    newReviewHtml += '</div>' +
        '<p>' + userReview + '</p>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>';
    $('#review_content').prepend(newReviewHtml);






        // Clear input fields
        $('#username').val('');
        $('#user_review').val('');






        // Close modal
        $('#review_modal').modal('hide');
    });




    // Function to save review to the database
    function saveReviewToDatabase(userName, userReview, userRating) {
        $.ajax({
            url: '{{ route("ratings.store", ["id" => $search->id]) }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                username: userName,
                user_review: userReview,
                user_rating: userRating
            },
            success: function (response) {
                console.log(response); // Log the response to see if reviews are fetched successfully
                window.location.href = window.location.href;
            },
            error: function (xhr, status, error) {
                console.error('Error saving review:', error);
                window.location.href = window.location.href;
            }
        });
    }
});


</script>


