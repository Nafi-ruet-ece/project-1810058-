<html>
<head>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title> banking website template</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="test3commentstyle.css">








</head>
<body>
	<section class ="header">
    <nav>
   



<div class="nav-links"id="navLinks">
  
  <ul>
<li> <a href="">HOME</a></li>
<li> <a href="">HOME</a></li>
<li> <a href="">HOME</a></li>
<li> <a href="">HOME</a></li>


  </ul>
</div>

<div class="text-box">
  <h1> Stack Data Structure </h1>
  <div class="subhead">
    <a href=""class="hero-bt"><p>Practice Problems on Stack</p></a> 
        <a href=""class="hero-bt"><p>Practice Problems on Stack</p></a>
        </div> 


  <p>
A linked list is a linear data structure, in which the elements are not stored at contiguous memory locations. The elements in a linked list are linked using pointers as shown in the below image:


<div class="imagenew"><img src="img/link.png" height="150px"width="200%"></div>
<div class="belowtext">In simple words, a linked list consists of nodes where each node contains a data field and 
a reference(link) to the next node in the list.</div>

  </p>

</nav>




<div class="link">
 <a href=""class="hero-btn">visit us to know more</a>
   <a href=""class="hero-btn">visit us to know more</a>
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
   url:"add_comment2.php",
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
   url:"fetch_comment2.php",
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
