



<html>
<head>
<title>Ticket Category</title>
</head>
  <style type="text/css">
     *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        
     }
     body{
        background-color: #32312f;
        font-family: sans-serif;
     }
     .line{
    width: 350px;
    height: 3px;
    background: black;
    margin: 0 auto 60px auto;
       }
     .table-container{
        padding: 0 10%;
        margin: 30px auto 0;
     }
     .heading{
        font-size: 40px;
        text-align: center;
        color: #f1f1f1;
        margin-bottom: 40px;
     }
     .table{
        width: 50%;
        border-collapse: collapse;
        margin-left:auto;
        margin-right:auto;
      
     }
     .table thead{
        background-color: #ee2828;
        
     }
     .table thead tr th{
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.35px;
        color: #ffffff;
        opacity: 1;
        padding: 12px;
        vertical-align: top;
        border: 1px solid #dee2e685;
     }
     .table tbody tr td{
        font-size: 14px;
        letter-spacing: 0.35px;
        font-weight: normal;
        color: #f1f1f1;
        background-color: #3c3f44;
        padding: 8px;
        text-align: center;
        border: 1px solid #dee2e685;
     }
     .table tbody tr td .btn{
        width: 80px;
        text-decoration: none;
        line-height: 35px;
        display: inline-block;
        background-color: #ff1046;
        font-weight: medium;
        color: #ffffff;
        text-align: center;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        font-size: 14px;
        opacity: 1;
     }
     </style>
<body background="2l.jpg">
   <br><br><br><br><br>
   <div class="table-contanier">
      <h1 class="heading" align="center">Ticket Category</h1>
      <div class="line"></div>
       <table class="table"><br>
<thead>
<tr>
<th >Category</th>
<th>Ticket Price</th>
<th>Seats</th>
<th>Available</th>
<th>#</th>
</tr>
</thead>
<tbody>
<tr>
   <td data-label="Category">First Category</td>
   <td data-label="Ticket Price">1500 RS</td>
   <td data-label="Seats">200</td>
   <td data-label="Available">100</td>
   <td data-label="#"><a href="http://localhost/newproject/reserve_ticket.php" class="btn">Buy</a></td>
</tr>
<tr>
   <td data-label="Category">Second Category</td>
   <td data-label="Ticket Price">1000 Rs</td>
   <td data-label="Seats">200</td>
   <td data-label="Available">150</td>
   <td data-label="#"><a href="http://localhost/newproject/reserveS_ticket.php" class="btn">Buy</a></td>
</tr>
<tr>
   <td data-label="Category">Third Category</td>
   <td data-label="Ticket Price">500 Rs</td>
   <td data-label="Seats">300</td>
   <td data-label="Available">200</td>
   <td data-label="#"><a href="http://localhost/newproject/reserveB_ticket.php" class="btn">Buy</a></td>
</tr>
</tbody>
    </table>
    </body>
    </html>




