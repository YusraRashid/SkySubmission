<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <title>Sky Moodslider: Entertainment to Suit Your Mood</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 margin1">
                    <a href="https://www.sky.com"><img src="images/sky.jpeg" alt="Sky logo" height=120px /></a>
                </div>
                <div class="col-sm-9 text-left margin2">
                    <h1>Moodslider</h1>
                    <h3>Entertainment to Suit Your Mood</h3>
                </div>
            </div>
            <!-- ------------------------------------------------------------------ -->
            <!--                          NAV BAR STARTS                            -->
            <!-- ------------------------------------------------------------------ -->
            <nav class="navbar navbar-expand-sm navbar-dark bg1">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="nav-content">   
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target=".modal">Upload</a>
                        </li>
                    </ul>
                </div>
            </nav>   

            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="upload text-left">Upload content:</h3>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data" method="post" name="moviesInfo">
                                <input type="file" name="moviesFile" class="btn text-left" id="moviesFile" required />
                                <input type="submit" id="uploadFile" name="submit" class="btn btn-primary text-right" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- --------------------------------------------------------------------- -->
            <!--                               NAV BAR ENDS                            -->
            <!-- --------------------------------------------------------------------- -->
            <div class="row margin3">
                <div class="col-sm-1"></div>
                <div class='col-sm-11'>
                    Tell us your mood and receive top recommendations from our viewing experts.
                </div>
            </div>
            <!-- ---------------------------------------------------------------------- -->
            <!--                              MOODSLIDER STARTS                         -->
            <!-- ---------------------------------------------------------------------- -->
            <!-- Agitated / Calm -->
            <div class="row margin3 text-center">
                <div class="col-sm-1 offset-md-1">Agitated</div>
                <div class="col-sm-8">
                    <input type="range" min="-1" max="1" value="0" class="mood-slider" id="calmnessInput">
                    <!-- Value test for sliders: -->
                    <!-- <p>Value: <span>0</span></p> -->
                </div>
                <div class="col-sm-1">Calm</div>
            </div>
    
            <!-- Happy / Sad -->
            <div class="row margin4 text-center">
                <div class="col-sm-1 offset-md-1">Sad</div>
                <div class="col-sm-8">
                    <input type="range" min="-1" max="1" value="0" class="mood-slider" id="happinessInput">
                    <!-- <p>Value: <span>0</span></p> -->
                </div>
                <div class="col-sm-1">Happy</div>
            </div>

            <!-- Tired / Alert -->
            <div class="row margin4 text-center">
                <div class="col-sm-1 offset-md-1">Tired</div>
                <div class="col-sm-8">
                    <input type="range" min="-1" max="1" value="0" class="mood-slider" id="alertnessInput">
                    <!-- <p>Value: <span>0</span></p> -->
                </div>
                <div class="col-sm-1">Alert</div>
            </div>

            <!-- Scared / Fearless -->
            <div class="row margin4 text-center">
                <div class="col-sm-1 offset-md-1">Scared</div>
                <div class="col-sm-8">
                    <input type="range" min="-1" max="1" value="0" class="mood-slider" id="fearlessnessInput">
                    <!-- <p>Value: <span>0</span></p> -->
                </div>
                <div class="col-sm-1">Fearless</div>
            </div>
            <!-- ---------------------------------------------------------------------- -->
            <!--                              MOODSLIDER ENDS                           -->
            <!-- ---------------------------------------------------------------------- -->
            <div class="row margin3">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                    <h3>Your viewing recommendations</h3>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------- -->
            <!--                              PROGRAMMES START                          -->
            <!-- ---------------------------------------------------------------------- -->
            <div class="row margin3 movies-list">
                <div class="col-sm-2 offset-md-1">
                    <div class="card">
                        <div class="card-body" id="content1">
                            No content available
                        </div>
                        <div class="card-footer">
                            No content available
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body" id="content2">
                            No content available
                        </div>
                        <div class="card-footer">
                            No content available
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body" id="content3">
                            No content available
                        </div>
                        <div class="card-footer">
                            No content available
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body" id="content4">
                            No content available
                        </div>
                        <div class="card-footer">
                            No content available
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="card">
                        <div class="card-body" id="content5">
                            No content available
                        </div>
                        <div class="card-footer">
                            No content available
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------------------------------- -->
            <!--                              PROGRAMMES END                            -->
            <!-- ---------------------------------------------------------------------- -->
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
