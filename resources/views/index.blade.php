<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Aide-Mémoire</title>
    <style>
        dfn {
            border-bottom: 2px dotted black;
            font-style: normal;
        }

        figure {
            background-color: #f1f1f1;
            height: 200px;
            padding: 20px 0 20px;
            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        figure img {
            max-height: 100px;
            max-width: 225px;
        }

        h1, h2 {
            text-align: center;
        }

        .grid-2 {
            background-color: #f1f1f1;

            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: center;
        }

        .p-30 {
            padding: 30px;
        }

        .project-list {
            text-align: center;

            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: center;
        }

        .section-thanks {
            padding: 30px;
        }
    </style>
</head>
<body>
    <h1>Laravel Aide-Mémoire</h1>

    <hr>

    <div class="grid-2 p-30">
        <div>
            <p>This is my super cool <dfn title="an aid to the memory (Merriam-Webster's Dictionary)">aide-mémoire</dfn>. Besides being super cool, this tool is meant for me to try out Laravel concepts and implement them.</p>

            <p>Thanks to <a href="https://laracasts.com/series/laravel-6-from-scratch" title="Link to the tutorials">Jeffrey Way</a> for creating his tutorials on Laravel. They were very useful to me in the creation of this project.</p>
        </div>

    
        <section class="section-thanks p-30">
            <h4>Many thanks to...</h4>
    
            <ul>
                <li>Laracasts</li>
                <li>Laravel</li>
                <li>SQLite</li>
                <li>Blade</li>
                <li>ResponsiveVoice.js</li>
                <li>Heroku (<a href="https://laravel-aide-memoire-3.herokuapp.com/" aria-multiline="Link to Heroku">link to the web app</a>)</li>
                <li>Github (<a href="https://github.com/monmima/laravel-aide-memoire" aria-multiline="Link to Github">link to the repository</a>)</li>
            </ul>

        </section>
    </div>

    <hr>

    <section>
        <h4>Testing Out Stuff With Routes</h4>

        <ul>
            <li><a href="/json">Returning JSON</a></li>
            <li><a href="/plain-text">Returning plain text</a></li>
            <li><a href="/html">Returning HTML, JS and CSS</a></li>
            <li><a href="/html-2">Returning HTML, JS and CSS (alternate route, same content)</a></li>
            <li><a href="/html-3">Returning HTML, JS and CSS (forward slashes in back-end route are optional)</a></li>
            <li><a href="/query-string-plain-text/?name=jack">Passing the query string "jack" as plain text</a></li>
            <li><a href="/query-string-html/?name=jack">Passing the query string "jack" to the view</a></li>  
            <li><a href="/route-with-wildcard-value-or-id/123">Handling a route with a wildcard/id</a></li>
            <li>Handling a route with a wildcard/id and a view too</li>

            <ul>
                <li><a href="/route-with-wildcard-and-view/my-first-post">My First Post</a></li>
                <li><a href="/route-with-wildcard-and-view/my-second-post">My Second Post</a></li>
            </ul>

            <li>Handling a route with a wildcard/id, a view and a controller (for more sizable projects)</li>

            <ul>
                <li><a href="/route-with-wildcard-no-view-and-controller/my-first-recipe">My First Recipe</a></li>
                <li><a href="/route-with-wildcard-view-and-controller/my-second-recipe">My Second Recipe</a></li>
            </ul>
        </ul>

        <h4>Connecting to a database</h4>

        <li>Handling a route with a wildcard/id, a view, a controller (for more sizable projects) and a database</li>

        <ul>
            <li><a href="/route-with-wildcard-view-controller-and-database/1">My First Recipe</a></li>
            <li><a href="/route-with-wildcard-view-controller-and-database/2">My Second Recipe</a></li>
        </ul>


        <hr>

        <section>
            <h2>Mini Projects</h2>

            <div class="project-list">

                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/HTML5_logo_black.svg" alt="Database">
                    
                    <figcaption>
                        <a href="/example-006">Views</a>
                    </figcaption>
                </figure>

                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Database.svg" alt="Database">
                    
                    <figcaption><a href="/example-011">Displaying stuff from the database in many different ways</a></figcaption>
                </figure>

                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Baldurs_Gate_stacked_logo_circa_Enhanced_Edition.png/640px-Baldurs_Gate_stacked_logo_circa_Enhanced_Edition.png" alt="Flag of China">
                    <figcaption>
                        <ul>
                            <li><a href="/bg-json">Baldur's Gate example as JSON</a></li>
                            <li><a href="/bg-html">Baldur's Gate example as HTML</a></li>
                            <li><a href="/bg-json-pagination">Baldur's Gate example as JSON with pagination</a></li>
                            <li><a href="/bg-html-pagination">Baldur's Gate example as HTML with pagination</a></li>
                        </ul>
                    </figcaption>
                </figure>

                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/PressFriends_Icon.png/640px-PressFriends_Icon.png" alt="Friends Shake">
                    
                    <figcaption><a href="/crud">Friends CRUD</a></figcaption>
                </figure>
    
                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Flag_of_China_%28WFB_2009%29.gif" alt="Flag of China">
                    <figcaption><a href="/zh">Chinese Words CRUD</a></figcaption>
                </figure>

            </div>

        </section>

        <hr>

        <section>
            <h2>Vanilla PHP tutorials</h2>

            <div class="project-list">

                <figure>
                    <img src="https://res.cloudinary.com/practicaldev/image/fetch/s--cPoPfzdt--/c_limit%2Cf_auto%2Cfl_progressive%2Cq_auto%2Cw_880/https://thepracticaldev.s3.amazonaws.com/i/r4q2ov05k057dy28d58v.png" alt="Database">
                    
                    <figcaption><a href="/brad">Brad Traversy's Tutorial</a></figcaption>
                </figure>

                <figure>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/FreeCodeCamp_logo.png" alt="Database">
                    
                    <figcaption><a href="/freecodecamp">Mike Dane/freeCodeCamp's Tutorial</a></figcaption>
                </figure>

            </div>

        </section>

    </section>

</body>
</html>