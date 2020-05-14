<?php
 require_once("header1.php");
 $id=$_GET['id'];
 $q="select * from user where id={$id}";
 $connection = mysqli_connect("localhost","root","","mydatabase");
 $result=$connection->query($q);
 $row = mysqli_fetch_array($result)
 
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
			<h3 class="heading-agileinfo text-center">Delete  <span>Record</span></h3>
            <br />
			<div >
				<div >
				
					<div align="center">
<form action="dbDelete.php">                    
<table  width="100%" >
            
            <tr>
                <td>Enter ID:</td>
                <td><input type="text" name="id" size="30" value="<?php echo $row['Id']; ?>" readonly="1"/></td>
                
            </tr>
            <tr>
                <td>Enter Name:</td>
                <td><input type="text" name="sname" size="30" value="<?php echo $row['Name']; ?>"/></td>
                
            </tr>
            <tr>
                <td>Enter Age:</td>
                <td><input type="text" name="age" size="30" value="<?php echo $row['Age']; ?>"/></td>
                
            </tr>
            <tr>
                <td>Enter Gender:</td>
                <td><select name="gen" size="1">
                     <option value="male">Male</option>
                     <option value="female">FeMale</option>
                     </select>
                </td>
                
            </tr>
            <tr>
               <td>
               </td>
               <td></td>
            </tr>
            <tr>
               <td>
               </td>
               <td><input type="submit" value="Delete Record"/></td>
            </tr>
             <tr>
               <td>
               </td>
               <td>
               <?php
               
               if(isset($_GET['id']) && isset($_GET['sname']) && isset($_GET['age']) && isset($_GET['gen']))
               {
                  $id=$_GET['id'];
                  $sn=$_GET['sname'];
                  $a=$_GET['age'];
                  $g=$_GET['gen'];
                  
                  $q="delete from user where Id={$id}";
                  $connection = mysqli_connect("localhost","root","","mydatabase");
                 if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);}
                 if ($connection->query($q) === TRUE) 
                    {
                        echo "<span style=\"color: green\">User  Sucessfully Deleted</span>";
                        
                    }
                    else
                    {
                        echo "<span style=\"color: red\">Error in Deletion</span>";
                    }
                  
               }
               else
               {
                //echo "Please Enter all the Fields Value";
               }
               ?>
               
               </td>
            </tr>
</table> 
</form>       
</div>
				</div>
			</div>
		</div>
	</section>

	 
<?php
 require_once("footer.php");
 ?>    