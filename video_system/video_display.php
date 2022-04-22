<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Video Sharing Site</title>
    <style media="screen">

      body{
        padding: 0px;
        margin: 0px;
      }
      *{
  margin:0;
  padding:0;
  font-family: 'Poppins', sans-serif;




}
      .header{
  min-height: 100vh;
  height:100%;
  width:100%;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/);
  background-position: center;
  background-size: cover;
  position: relative; 

}
      h1{
        background-color: teal;
        text-align: center;
        color: white;
        font-size: 48px;
        padding: 10px;
        margin-top: 0px;
      }
      ul{
        list-style-type: none;
      }
      li{
        float: left;
        margin-left: 15px;
        margin-top: 25px;
      }
      p{
        font-weight: bold;
        max-width: 380px;
        font-size: 18px;
        height: 30px;
      }
    </style>
  </head>
  <body>
  		<section class ="header">
    <h1>Video Sharing Site</h1>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

    <div class="">
      <ul id="myTable">
        <?php
         include 'db.php';

         $sql1="SELECT * from video";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>
           <li>
             <p><?php echo $info['title']; ?></p>
             <video src="video/<?php echo $info['video']; ?>"  width="380px"
                poster="thumbnail/<?php echo $info['thumbnail']; ?>" controls>

             </video>
           </li>

           <?php
           
         }


        ?>
      </ul>

    </div>
    </input>
    </section>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("p");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
   
      txtValue = tr.textContent || tr.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

  </body>
</html>