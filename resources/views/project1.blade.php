<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>LIST BOOK</title>
    </head>
    
    <body>
        <div class="container">
            <div class="card mt-5">             
                <div class="card-body">
                    
                    
                    <table class="table table-bordered table-hover table-striped">
                        <div>
                            
                            <h2>LIST BOOK</h2>
                             
                             </div>
                        <div>
                            
                            <label for="list">List Shown :</label>
                            <select name="dropdown" id="drop">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                            <option value="90">90</option>
                            <option value="100">100</option>
                            </select>
                            
                            </div>

                        <div>
                        <form action="index.php" method="get">
                            <label>Search :</label>
                            <input type="text">
                            <input type="submit" value="Search">
                        </form>
                        </div>
                       <br>
                        <div>
                        <a href="/project3" type="button" style="color:black">Insert Rating</a> |
                        <a href="/project2" type="button" style="color:black">Top 10 Most Famous Author</a>
                        </div>
                        <br>    
                       
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Book Name</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Average Rating</th>
                                <th>Voter</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach ($project1 as $item)
                        <tbody>
                            
                            <tr>
                                
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->book }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->rating }}</td>
                                <td>{{ $item->voter }}</td>
                               
                            </tr>
                           
                            
                        </tbody>
                        @endforeach
                    </table>

                    <br/>
                    Halaman : {{ $project1->currentPage() }}<br/>
                    Jumlah Data : {{ $project1->total() }}<br/>
                    Data Per Halaman : {{ $project1->perPage() }}<br/>
                    <br>

                    {{ $project1->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </body>
</html>