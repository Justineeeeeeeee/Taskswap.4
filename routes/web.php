<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\findTask;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\post_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Home', [HomeController::class, 'index'])
    ->middleware(['auth'])
    ->name('Dashboard');


Route::get('/Post Task', function () {
    return view('Post_task');

})->middleware(['auth', 'verified'])->name('Post_task');

Route::get('/Inbox', function () {
    return view('dashboard.inbox');

})->middleware(['auth', 'verified'])->name('dashboard.inbox');

Route::get('/Task Status', function () {
    return view('dashboard.taskStatus');
})->middleware(['auth', 'verified'])->name('dashboard.taskStatus');

Route::get('/Transaction History', function () {
    return view('dashboard.transactionHistory');

})->middleware(['auth', 'verified'])->name('dashboard.transactionHistory');

Route::get('/Search Result', function () {
    return view('dashboard.SearchResults');

})->middleware(['auth', 'verified'])->name('dashboard.SearchResults');

Route::get('/Feed', function () {
    return view('dashboard.Feed');

})->middleware(['auth', 'verified'])->name('dashboard.Feed');




Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy    ');
});

Route::get('/Forgot Password', function () {
    return view('auth.forgot-password');
});


Route::middleware('auth')->group(function () {
    Route::get('/SearchResults', [SearchController::class, 'search'])->name('dashboard.SearchResults');
    Route::get('/Feed{id}', [SearchController::class, 'show'])->name('dashboard.Feed');

});
Route::middleware('auth')->group(function () {
Route::Post('/My Portfolio create', [PortfolioController::class, 'store'])->name('Portfolio');
Route::get('/My Portfolio{id}', [PortfolioController::class, 'index'])->name('Myportfolio.index');

});



Route::middleware('auth')->group(function () {
    Route::get('/My Portfolio', [PortfolioController::class, 'view'])->name('Myportfolio.view');
    Route::patch('/MyPortfolioEdit', [PortfolioController::class, 'Update'])->name('Portfolio.Update');
    Route::delete('/delete/{id}', [PortfolioController::class, 'destroy'])->name('Portfolio.Delete');
    });
    

Route::middleware('auth')->group(function () {
    Route::get('/Task Status', [post_Controller::class, 'TaskStatus'])->name('taskstatus.index');





    Route::get('/Transaction History', [post_Controller::class, 'TransactionHistory'])->name('TransactionHistory.index');
    Route::get('/Task Status', [post_Controller::class, 'TaskStatus'])->name('taskstatus.index');

});




Route::middleware('auth')->group(function () {
    Route::get('/Edit Profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/Edit Profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/Edit Profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/Post Task', [post_Controller::class, 'index'])->name('post.index');
    Route::post('/Post Task', [post_Controller::class, 'store'])->name('post.store');
    Route::get('/Notifications', [NotificationController::class, 'Notification'])->name('Notifications');
    Route::post('/Notifications', [NotificationController::class, 'store'])->name('Notifications.store');
    Route::put('/Notifications', [NotificationController::class, 'EditStatus'])->name('Notification.update');
    Route::patch('/Notifications', [NotificationController::class, 'DeclineRequest'])->name('Notification.Decline');

});

Route::get('/Ratings{id}', function () {
    return view('dashboard.ratings');

})->middleware(['auth', 'verified'])->name('dashboard.ratings');


Route::middleware('auth')->group(function () {
    Route::get('/Home', [post_Controller::class, 'index'])->name('dashboard');
    Route::post('/Home', [post_Controller::class, 'store'])->name('post.store');
    Route::patch('/edit/posts',[post_Controller::class,'editPost'])->name('editPost');
    Route::get('delete/posts/{post_id}', [post_Controller::class,'deletePost'])->name('deletePost');

});

Route::middleware('auth')->group(function () {
    Route::get('/Find Task', [findTask::class, 'index'])->name('Find_Task');
    Route::post('/edit/posts', [findTask::class, 'editTasker'])->name('editTasker');

});

Route::middleware('auth')->group(function () {
    Route::get('/Token Page', [TokenController::class, 'showTokenPage'])->name('token.page');
});



    // START FOR GAMES
    Route::middleware('auth')->group(function () {
        Route::post('/updateTokenBalance', [TokenController::class, 'updateTokenBalance'])->name('update.token.balance');
    });

    Route::middleware('auth')->group(function () {

        Route::post('/updateSpinTokenBalance', [TokenController::class, 'updateSpinTokenBalance'])->name('update.spin.token.balance');

    });

    Route::middleware('auth')->group(function () {

        Route::post('/updateThirdGameTokenBalance', [TokenController::class, 'updateThirdGameTokenBalance'])->name('update.third.game.token.balance');

    });

    Route::middleware('auth')->group(function () {

        Route::post('/updateThirdSaveTokenBalance', [TokenController::class, 'updateThirdSaveTokenBalance'])->name('update.third.save.token.balance');

    });

    Route::middleware('auth')->group(function () {

        Route::post('/updateThirdLoginTokenBalance', [TokenController::class, 'updateThirdLoginTokenBalance'])->name('update.third.login.token.balance');

    });

    Route::middleware('auth')->group(function () {

        Route::post('/updateThirdPostTokenBalance', [TokenController::class, 'updateThirdPostTokenBalance'])->name('update.third.post.token.balance');

    });

    // END FOR GAMES

//rating
Route::middleware('auth')->group(function () {
    Route::get('/Ratings{id}', [ReviewController::class, 'index'])->name('ratings.view');
    //Route::get('/get-average-rating/{id}', [ReviewController::class, 'getAverageRating'])->name('get_average_rating');
});

Route::middleware('auth')->group(function () {
    Route::post('/Payments', [post_Controller::class, 'Payment'])->name('Payment');
    //Route::get('/get-average-rating/{id}', [ReviewController::class, 'getAverageRating'])->name('get_average_rating');
});



Route::middleware('auth')->group(function () {
    Route::post('/Ratings{id}', [ReviewController::class, 'store'])->name('ratings.store');
    Route::put('/ratings/{id}', [ReviewController::class, 'update'])->name('ratings.update');
    Route::delete('/ratings/{id}', [ReviewController::class, 'destroy'])->name('ratings.destroy');

});

// payment
Route::middleware('auth')->group(function () {
    Route::get('/Payments', [post_Controller::class, 'Payment'])->name('Payment');

});
// end

//  Route::get('/searchusercontent/{id}/average-rating', [SearchUserController::class, 'fetchAverageRating']);

    // Start Admin Dashboard

    Route::middleware('auth')->group(function () {
        Route::get('/Cash Out Request', [AdminController::class, 'CashOutRequest'])->name('Cashout');
        Route::patch('/Cash Out Request', [AdminController::class, 'EditGcashNumber'])->name('GcashUpdate');

    });

    Route::middleware('auth')->group(function () {
        Route::get('/Complains Report', [AdminController::class, 'ComplainsReport'])->name('Complains');

    });

    Route::middleware('auth')->group(function () {
        Route::Put('/Update Cash In Status', [AdminController::class, 'UpdateCashINStatus'])->name('Remove.CashIN');

    });

    Route::middleware('auth')->group(function () {
        Route::put('/Update Cash Out Status', [AdminController::class, 'UpdateCashOUtStatus'])->name('Remove.CashOut');

    });



    Route::middleware('auth')->group(function () {
        Route::post('/Cash In process', [AdminController::class, 'CashInProcess'])->name('CashInProcess');
        Route::post('/Cash In Decline', [AdminController::class, 'CashInDecline'])->name('CashInDecline');

    });



    //END



    //START TASK STATUS
Route::middleware('auth')->group(function () {

    Route::get('/Task Status', [post_Controller::class, 'TaskStatus'])->name('taskstatus.index');
    Route::get('/Transaction History', [post_Controller::class, 'TransactionHistory'])->name('TransactionHistory.index');
    Route::get('/Task Status', [post_Controller::class, 'TaskStatus'])->name('taskstatus.index');
    Route::get('/todo_tasks', [post_Controller::class, 'todo_tasks'])->name('todo_tasks');
    Route::post('/uploadtask', [post_Controller::class,'upload']);
    Route::get('/download/{file}', [post_Controller::class,'download']);
    Route::get('/view/{id}', [post_Controller::class,'view']);
    Route::post('todo_tasks/edit/posts',[post_Controller::class,'submitProgress'])->name('submitProgress');
    Route::get('/posted_tasks', [post_Controller::class, 'posted_tasks'])->name('posted_tasks');
    Route::get('posted_tasks/edit/posts/{tasker_id}',[post_Controller::class,'declineTasker'])->name('declineTasker');
    Route::patch('posted_tasks/edit/posts/{task_progress}',[post_Controller::class,'editProgress'])->name('editProgress');
    Route::post('posted_tasks/edit/posts/{task_progress}',[post_Controller::class,'confirmProgress'])->name('confirmProgress');
    Route::get('posted_tasks/edit/posts',[post_Controller::class,'denyProgress'])->name('denyProgress');
});
    // END TASK STATUS

    //START CASH IN AND OUT
    Route::middleware('auth')->group(function () {
    Route::post('/Cash In Request', [TokenController::class, 'Cash_in'])->name('Token.CashIn');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/Cash Out Process', [AdminController::class, 'CashOutProcess'])->name('CashOutProcess');
        });

    Route::middleware('auth')->group(function () {
        Route::post('/Cash Out Process Declined', [AdminController::class, 'CashOutProcessDecline'])->name('CashOutProcessDecline');
        });


    Route::middleware('auth')->group(function () {
    Route::post('/Cash Out Request', [TokenController::class, 'Cash_Out'])->name('Token.CashOut');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/Transaction History Admin', [AdminController::class, 'TransactionHistory_admin'])->name('TransactionHistory_Admin');
        });




        //START CASH IN AND OUT
    require __DIR__.'/auth.php';
