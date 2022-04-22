<?php

?>
<html>
<head>

<title> banking website template</title>
<link rel="stylesheet"href="tes2style.css">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<section class ="header">
    <div class="content">
   



<div class="content-links"id="navLinks">
 
  <ul>
<li> <a href="test3.php">page1</a></li>
<li> <a href="commentsystem/testcomment.php">comment</a></li>
<li> <a href="/file uploading/display_pdf.php">fileuploading</a></li>
<li> <a href="/php_connection/newinternal2.html">HOME</a></li>


  </ul>
</div>

<div class="text-box">
  <h1> What is Data Structure?  </h1>
  <p>A data structure is a particular way of organizing data in a computer so that it can be used
    effectively.
    For example, we can store a list of items having the same data-type using the array data structure.




  </p>
  <div class="imagenew"><img src="img/memory.png" height="200px"width="400px"></div>
</div>


</div>
</section>






<div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>



<div class="endline">
    <div class="endleft">
    <p>Our mission is to provide a free, world-class</p>
    <p>education to anyone, anywhere.</p>
  </br>
</br
<p>Khan Academy is a 501(c)(3) nonprofit></p>
<p>organization. Donate or volunteer today!</p>
</div>
<div class="endleftthree">
<p>igation</p>
<p>About</p>
<p>News</p>
<p>Impact</p>
<p>Our team</p>
<p>Our interns</p>
<p>Our content specialists</p>
<p>Our leadership</p>
<p>Our supporters</p>
</div>
<div class="endlefttwo">
<p>igation</p>
<p>About</p>
<p>News</p>
<p>Impact</p>
<p>Our team</p>
<p>Our interns</p>
<p>Our content specialists</p>
<p>Our leadership</p>
<p>Our supporters</p>
</div>
<div class="endleftone">
<p>igation</p>
<p>About</p>
<p>News</p>
<p>Impact</p>
<p>Our team</p>
<p>Our interns</p>
<p>Our content specialists</p>
<p>Our leadership</p>
<p>Our supporters</p>
</div>
<div class="endleftfour">
  <img src="img/icon.png">
 <p> What variable</p></div>


</div>
</div>
<div class="endleftfive">


</div>



</div>

 <div class= "endline2">
  <div class="endline21">
   <p>Terms of use </p>

  </div>
 <div class="endline22">
   <p>Privacy policy</p>

  </div>

 <div class="endline23">

<p>cookie Notice </p>

 </div>
  <div class="endline24">


      <img src="img/fb.png">
   
   
      <img src="img/twitter.png">

      <img src="img/instagram.jpg">


 </div>



 </div>



</body>
</html>


