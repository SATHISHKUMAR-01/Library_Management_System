<?php ?>


<html>
    <head>
        <title> List of Books </title>
        <?php include('header.php') ?>
        <style>
           
    
        </style>

       
            <script>
            $(document).ready(function() {
    $('#books').DataTable( {
        dom: 'Qlfrtip'
    });
});
        </script>
       
       

    </head>
    <body >
        <?php include('navbar.php') ?>
        <br><br><br> 
        <div class="container">

        <p class="fs-4 text-secondary pt-2 text-center"> List of Books Available </p>
        <hr>


        
        <table id="books" class="display nowrap" style="width:100%">
            <thead>
            <tr> <th>ISBN No</th>
                <th>Title</th>
                <th>Author</th>
               
                <th>Subject</th>
                <th>Publish Date</th>
                <th> </th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            <tr>
               <td>ISBN2345679</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><span>Edinburgh</span></td>
                <td><span class="old">61</span></td>
                <td> <button class="btn btn-warning"> Borrow </button></td>
                <td> <button class="btn btn-primary"> Add to Favorites </button></td>
                
              </tr>
        </table>
            
            




        </div>
        
    </body>
</html>