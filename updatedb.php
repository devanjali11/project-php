<?php
 require_once("header1.php");
 ?>
 <ol class="breadcrumb">
 <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Customer Record</li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">Customer <span>Record</span></h3>
            <br />
			<div >
				<div >
				
					<div >
                        <table  width="100%" border="1">
                        <tr style="background-color:yellow">
                          <th>Id</th>
                          <th>Name</th>
                          <th>Age</th>
                           <th>Gender</th>
                           <th>DB Operation</th>
                        </tr>
                        <?php
                        
                        $connection = mysqli_connect("localhost","root","","mydatabase");
                        $result =$connection->query("select * from user");
                        		
                        while ($row = mysqli_fetch_array($result)) 
                        {
                            echo "<tr>";
                           echo "<td>".$row["Id"]."</td>";
                           echo "<td>".$row["Name"]."</td>";
                           echo "<td>".$row["Age"]."</td>";
                           echo "<td>".$row["Gender"]."</td>";
                           echo "<td align:=\"center\"><a href=\"dbUpdate.php?id={$row["Id"]}\">Update</a> &nbsp;&nbsp; <a href=\"dbDelete.php?id={$row["Id"]}\">Delete</a></td>";
                           echo "</tr>";
                           
                        }
                        $connection->close();
                        ?>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	 
<?php
 require_once("footer.php");
 ?>