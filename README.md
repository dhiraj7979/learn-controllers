Run 'composer install' command to install all dependencies.<br/>
Run 'php artisan migrate' command in the root directory of this project.<br/>
Run 'php artisan storage:link' command (Might not be necessary).<br/>
Run 'php artisan serve' command to start the server.<br/>
From postman app create an entry into the database video table.<br/><br/>
Eg:
url -> http:localhost:8000/api/videos<br/>
method-> post<br/>
body(json) -><br/>
{<br/>
    "name" : "any name",<br/>
    "path" : "storage/videos/tutorial.mp4"<br/>
}
<br/><br/>
See if the entry got entered in database can also verify by running get request on http:localhost:8000/api/videos.<br/>

Note the id of the above video posted.<br/>
<br/>
Then make get request on : http:localhost:8000/api/videos/<id>/stream
<br/>
Above in <id> place the id of the video.
<br/>
You will get the video stream as a response from the api.
<br/>
