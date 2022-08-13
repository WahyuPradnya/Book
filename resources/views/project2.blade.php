<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>TOP 10 MOST FAMOUS AUTHOR</title>
    </head>
    
    <body>
        <div class="container">
            <div class="card mt-5">             
                <div class="card-body">
                    
                    
                    <table class="table table-bordered table-hover table-striped">
                        <div>
                            
                           <h2>TOP 10 MOST FAMOUS AUTHOR</h2>
                            
                            </div>

                     
                       
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Author Name</th>
                                <th>Voter</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach ($project2 as $item)
                        <tbody>
                            
                            <tr>
                                
                                <td>{{ $no++}}</td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->voter }}</td>
                               
                            </tr>
                           
                            
                        </tbody>
                        @endforeach
                    </table>
                    <input type="button" value="Back" onclick="history.back()">
                </div>
            </div>
        </div>
    </body>
</html>