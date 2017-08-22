<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Akktis task">
        <title>Akktis Task</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div class="container">            
                <div class="row"> 
                    <div class="col-xs-12">
                        <h1> Akktis <small> - technical test</small></h1>
                    </div>
                </div>
            </div>              
        </header>
        <main>          
            <div class="container">   
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-info" role="alert">                         
                            <p></p>
                        </div> 
                    </div>
                </div>
                <div class="row">       
                    <div class="col-xs-3">
                        <div class="input-group-lg">
                            <select id="field" class="form-control">
                                <option value="name">Search by name</option>
                                <option value="surname">Search by surname</option>
                                <option value="color">Search by color</option>               
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-9">                    
                        <div class="input-group input-group-lg">
                            <input type="text" id="term" class="form-control" placeholder="Search for..." required="">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="search"><i class="glyphicon glyphicon-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><h2>Name</h2></div>
                    <div class="col-xs-4"><h2>Surname</h2></div>
                    <div class="col-xs-4"><h2>Color</h2></div>
                </div>
            </div>
            <div class="container" id="results">
            </div>            
        </main>
    </body>
</html>