<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>INSERT RATING</title>
    </head>
    
    <body>
        <div class="container">
            <div class="card mt-5">             
                <div class="card-body">
                    
                    
                    <table class="table table-bordered table-hover table-striped">
                        <div>
                            
                           <h2>INSERT RATING</h2>
                            
                            </div>

                     
                       
                        <thead>
                            
                        </thead>

                        <tbody>
                            
                            <tr>
                                <label>Author Name : </label>
                                <input type="text">
                            </tr>
                            <br>
                            <tr>
                                <label>Book Name : </label>
                                <input type="text">
                            </tr>
                            <br>
                            <tr>
                                <label>Rating : </label>
                                <select name="dropdown" id="drop">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    </select>
                            </tr>
                            <br>
                            <input type="button" value="Submit">
                            
                           
                            
                        </tbody>

                    </table>
                    <input type="button" value="Back" onclick="history.back()">
                </div>
            </div>
        </div>
    </body>
</html>