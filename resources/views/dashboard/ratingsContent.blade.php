<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-md-9" >
<div  style="height: 612px; overflow-y: auto; border-style: solid; border-color: #62AC83; border-radius:20px"  >
            <div class="card-body" style="font-family:Fira Sans, sans-serif;">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating"></span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                            <i class="fas fa-star star-light mr-1 main_star text-warning"></i>
                        </div>
                        <h3 style="font-family:Fira Sans, sans-serif; "><span id="total_review" style="font-family:Fira Sans, sans-serif; "></span> Reviews</h3>

                    </div>

                    <div class="col-sm-4">
                        <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>
                        </p>
                        <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                        </p>
                    </div>

                    <div class="col-sm-5 text-center">
                        <h3 class="mt-4 mb-3" style="font-family:Fira Sans, sans-serif; ">Write Review Here</h3>
                        <button type="button" name="add_review" id="add_review" class="btn btn-primary" style="font-family:Fira Sans, sans-serif; ">Review</button>
        
                    </div>
                </div>

            </div>



        <div class="mt-5" id="review_content">

        </div>




</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-family:Fira Sans, sans-serif; ">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </h4>

                @auth
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" style="font-family:Fira Sans, sans-serif; " value="{{ auth()->user()->username }}" readonly />
                @endauth
                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here" style="font-family:Fira Sans, sans-serif; "></textarea>

                <div class="form-group text-center mt-4">
                    <button type="button" class="btn btn-primary" id="save_review" style="font-family:Fira Sans, sans-serif; ">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>




<!--edit modal-->
<div id="edit_review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-family:Fira Sans, sans-serif; ">Edit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="edit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="edit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="edit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="edit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="edit_star_5" data-rating="5"></i>
                </h4>



                <input type="hidden" id="edit_review_id">
                <input type="text" name="edit_username" id="edit_username" class="form-control" placeholder="Username" style="font-family:Fira Sans, sans-serif; "/>
                <textarea name="edit_user_review" id="edit_user_review" class="form-control" placeholder="Type Review Here" style="font-family:Fira Sans, sans-serif; "></textarea>




                <div class="form-group text-center mt-4">
                    <button type="button" class="btn btn-primary" id="update_review" style="font-family:Fira Sans, sans-serif; ">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- confirmation modal sa delete-->
<div id="deleteConfirmationModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-family:Fira Sans, sans-serif; ">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-family:Fira Sans, sans-serif; ">Are you sure you want to delete this review?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="font-family:Fira Sans, sans-serif; ">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete" style="font-family:Fira Sans, sans-serif; ">Delete</button>
            </div>
        </div>
    </div>
</div>





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




        @foreach($reviews as $review)
    var newReviewHtml = `<div class="card" data-review-id="{{ $review->id }}">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 style="font-family:Fira Sans, sans-serif; ">{{ $review->username }}</h3>
            <div class="ml-auto">
                <button class="btn btn-primary edit-rating-item" data-toggle="modal" data-target="#edit-rating-modal">Edit</button>
                <button class="btn btn-danger delete-rating-item">Delete</button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">`;

    // Append star rating icons with shaded stars for user's rating
    @for ($i = 0; $i < $review->user_rating; $i++)
        newReviewHtml += '<i class="fas fa-star star-light mr-1 main_star text-warning"></i>';
    @endfor
    @for ($j = $review->user_rating; $j < 5; $j++)
        newReviewHtml += '<i class="fas fa-star star-light mr-1 main_star"></i>';
    @endfor

    newReviewHtml += `</div>
                    <p style="font-family:Fira Sans, sans-serif; ">{{ $review->user_review }}</p>
                </div>
            </div>
        </div>
    </div>`;
    $('#review_content').append(newReviewHtml);

    // Count ratings and total reviews
    ratings['{{ $review->user_rating }}']++;
    totalRating += parseInt('{{ $review->user_rating }}');
    totalReviews++;
@endforeach



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