<?php
        
// Start Routes for status 
Route::resource('services/status','Services\StatusController');
// End Routes for status 

                    
// Start Routes for websitesettings 
Route::resource('services/websitesettings','Services\WebsitesettingsController');
// End Routes for websitesettings 

                    
// Start Routes for latestvideos 
Route::resource('services/latestvideos','Services\LatestvideosController');
// End Routes for latestvideos 

                    
// Start Routes for vacancyannouncement 
Route::resource('services/vacancyannouncement','Services\VacancyannouncementController');
// End Routes for vacancyannouncement 

                    
// Start Routes for homebanner 
Route::resource('services/homebanner','Services\HomebannerController');
// End Routes for homebanner 

                    ?>