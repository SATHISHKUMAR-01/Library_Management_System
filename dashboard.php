<?php 
session_start();
include('config/connect.php');

$name =  $_SESSION['name'];

?>


<html>
    <head>
        <title> Dashboard </title>
        <?php include('header.php') ?>
        <style>
            #return{
                background-image: linear-gradient(to bottom, #cff4f6, #c4e0e2, #b8cccf, #adb9bb, #a1a6a7);
            }
            #borrow{
                background-image: linear-gradient(to bottom, #cff4f6, #c4e0e2, #b8cccf, #adb9bb, #a1a6a7);
            }
            #total_return{
                background-image: linear-gradient(to bottom, #cff4f6, #c4e0e2, #b8cccf, #adb9bb, #a1a6a7);
            }

    
        </style>

        <script>
            $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Qlfrtip'
    });
});
        </script>

       

    </head>
    <body >
        <?php include('navbar.php') ?>
        <br><br><br> 
        <div class="container">
            <div class="w-100 mx-auto row m-1">

                <div class="col card m-1 shadow" id="return">
                    <h5 class="card-title text-danger" style="font-size:72px">2</h5>
                    <p class="text-dark fs-6 p-1"> Books to be Return</p>
                </div>

                <div class="col card m-1 shadow" id="return">
                    <h5 class="card-title text-secondary" style="font-size:72px">12</h5>
                    <p class="text-dark fs-6 p-1"> Books Borrowed (this month)</p>
                </div>

                <div class="col card m-1 shadow" id="borrow">
                    <h5 class="card-title text-success" style="font-size:72px">29</h5>
                    <p class="text-dark fs-6 p-1"> Total number of books borrowed</p>
                   
                </div>

                <div class="col card m-1 shadow" id="total_return">
                    <h5 class="card-title text-success" style="font-size:72px">24</h5>
                    <p class="text-dark fs-6 p-1"> Total number of books returned</p>
                </div>

            </div>

            <br> 

            <div class="card p-3 shadow-lg">

           
            <p class="fs-5 text-secondary"> Pending books to be return </p>
            <hr>
            

            <table id="example" class="display nowrap" style="width:100%">
            <thead>
            <tr> <th>ISBN No</th>
                <th>Title</th>
                <th>Author</th>
               
                <th>Subject</th>
                <th>Publish Date</th>
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
                <td> <button class="btn btn-success"> Return </button></td>
                
              </tr>
              </table>
            
            </div>

           




        </div>
        
    </body>
</html>