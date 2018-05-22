<?php  
 $connect = mysqli_connect('localhost', 'survey', 'coffee', 'survey');  
 $output = '';  
 $sql = "SELECT * FROM survey ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="20%">Name</th>  
                     <th width="40%">Email</th>
                     <th width="30%">Profession</th>  
                     </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    /*
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tbl_sample LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
    */
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td>
                     
                     <td class="profession" data-id4="'.$row["id"].'" contenteditable>'.$row["profession"].'</td>
                     
                     
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="email" contenteditable></td>
                <td id="profession" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable></td>  
          <td id="email" contenteditable></td>
          <td id="profession" contenteditable></td>  
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>