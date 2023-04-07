Run 'composer install' command to install all dependencies.
Run 'php artisan migrate' command in the root directory of this project.
Run 'php artisan storage:link' command (Might not be necessary).
Run 'php artisan serve' command to start the server.
From postman app create an entry into the database video table
Eg:
url -> http:localhost:8000/api/videos
method-> post
body(json) ->
{
    "name" : "any name",
    "path" : "storage/videos/tutorial.mp4"
}

See if the entry got entered in database can also verify by running get request on http:localhost:8000/api/videos.

Note the id of the above video posted.

Then make get request on : http:localhost:8000/api/videos/<id>/stream

Above in <id> place the id of the video.

You will get the video stream as a response from the api.
