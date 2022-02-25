<?php
  $students = [
      [
          'name' => 'Anup',
          'email'=> 'annupnepal@gmail.com',
          'address'=> 'Manamaiju',
      ],
      [
        'name' => 'Ram',
        'email'=> 'ramkhanal@gmail.com',
        'address'=> 'Balaju',
      ],
      [
        'name' => 'Krishna',
        'email'=> 'kk@gmail.com',
        'address'=> 'Lainchaur',
      ]
      
      ];
    

   if(isset($_GET['edit']))
   {
       $student_id = $_GET['edit'];
       ?>
       <form action = "index.php" method ='POST'>
            <label>
            Name: <input type = "text" value="<?php echo $students[$student_id]['name']?>" name="name">
            </label><label>
            Email: <input type = "text" value="<?php echo $students[$student_id]['email']?>" name="email">
            </label>
            Address: <input type = "text" value="<?php echo $students[$student_id]['address']?>" name = "address">
            </label>
                <input type = "submit"  name = "submit" value="Submit">
        </form>
       <?php
   }

   if(isset($_GET['details']))
   {
       $student_details = $_GET['details'];
       ?>
         <ul>
             <li>Name: <?php echo $students[$student_details]['name']?></li>
             <li>Email: <?php echo $students[$student_details]['email']?></li>
             <li>Address: <?php echo $students[$student_details]['address']?></li>
         </ul>
       <?php
   }

?>

<table border = "1">
    <tr>
      <td>Name</td>
      <td>Email</td>
      <td>Address</td>
      <td>Action</td>
    </tr>

    <?php
       foreach($students as $student_id => $student){
     ?>
       <tr>
           <td><?php echo $student['name']; ?></td>
           <td><?php echo $student['email']; ?></td>
           <td><?php echo $student['address']; ?></td>
           <td><a href="index.php?edit=<?php echo $student_id;?>">Edit</a>
           <a href="#">Delete</a>
           <a href="index.php?details=<?php echo $student_id;?>">Details</a></td>
       </tr>

    <?php  
       }
    ?>

    
   

</table>