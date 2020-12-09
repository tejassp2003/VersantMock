<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">   
   
    <link rel="stylesheet" href="SentenceCompletion2.css">
    <title>VERSANT</title>
</head>
<body>
    <div class="navbar">
        VERSANT MOCK TEST
    </div>
    <div class="main_content">
        <div class="heading">
            <div class="instruction">
                <div class="aicon">
                    H
                </div>
                Passage Reconstruction
            </div>
        </div>
        
        <div class="sub_content">
            <h3>Rewrite the passage you just heard.</h3>
            <div class="box">
                <div class="head">
                    .
                </div>
                <div class="type">
                    <form>
                        Type here : 
                        <input type="text" id="sentence" name="sentence">
                    </form>
                </div>
                
            </div>

            <div>
            <div class="nav_icons">
                
                <button class="icon btn btn-light" href="#" type="button" >
                        <i class="large material-icons ripple replay_icon">replay</i>
                        <span><strong>Replay</strong></span>  
                </button>

                <a href="">
                    <button class="icon btn btn-light" href="#" type="button">
                        <svg class="next_arrow" width="2.25em" height="2.25em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill=" #464646" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5A.5.5 0 0 0 4 8z"/>
                        </svg>
                        <span><strong>Next</strong></span>
                    </button>
                </a>

            </div>
            </div>
        </div>
    </div>
</body>
</html>