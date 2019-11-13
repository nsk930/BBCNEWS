<?php 
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>Search Result</title>
 <style type="text/css">
 
    
    #topbar{
	  width:1000px;
	  margin:0 auto;
	  background-color:white;
	  height:40px;
	 }
	body{
	  margin:0;
	  padding:0;
	  font-family:Helmet,Freesans,Helvetica,Arial,sans-serif;
	  }
	#logo{ 
	  margin:8px 8px 0px 8px;
	  width:100px;
	  float:left;
	  }
	  
	.topbar-section{
	      float:left;
		  border-left:1px #CCCCCC   solid;
          height:100%;	
        }	
    #signin-image{
	
	 width:25px;
	 margin: 10px 12px 0px 12px; 
	 float:left;
	 }
	 #signin-text{
	  
	   font-weight:bold;
	   font-size:90%;
	   position:relative;
	   top:14px;
	   padding-right:50px;
	   } 
	   
	   <!--hight of wiglyline and topbar is same-->
	 #wiglyline{
	   
	     float:left;
		 height:10px;
		} 
	#bell{
	 
	   height:20px;
	   margin:0;
	   position:relative;
	   top:-6;
	   
	   }
	#bell-div{
	
	   float:left;
	   padding-right:15px;
	   
	   
	  } 
	 .top-menu{
	     font-weight:bold;
		 font-size:90%;
		 padding:13px 15px 0 15px;
		 height:27px;
		 
		 }
	
		 
	  #arrow{

        margin-left:8px;
      }		
	 #search-box{
        background-color:#E4E4E4;
		border:none;       
	    font-weight:bold;
		fornt-size:14px;
		padding:5px;
		margin:5px 0 5px 5px;
		float:left;
	}	
	#magnifying-glass{
	   margin-top:5px;
	   position:relative;
	   left:-1px;
	   height:25px
	  
	   }
	   .clear{
	    clear:both;
		
	   }
	#menu-bar-container{
	     border-top:1px solid #CCCCCC;
         background-color:#BB1919;
		 width:100%;
		 height:70px;
		 }
	#menu-bar{
	  
	   width:1000px;
	   margin:0 auto;
	   }
	h1{
	  
	  padding:0;
	  margin:0;
	  color:white;
	  font-size:40px;
	  font-weight:normal;
	  padding-top:10px;
	  float:left;
	  }
	#menu-bar-2-container{ 
      background-color:#A91717;	
	  width:100%;
	 
	  }
	#menu-bar-2{
     width :1000px;
     margin:0 auto ;
     height:35px;
	 
    }	 
	#menu-bar-2 a{
	  color:white;
	  text-decoration:none;
	
	  padding: 0 10px;
	  border-right: 1px solid #BB4545;
	  font-size:14px;
	  position:relative;
	  top:8px;
	  }
	  #menu-bar-2 a:hover{
       text-decoration:underline;
      }	   
    .no-border{
	  border:none !important;
	  }
	 #down-arrow{
	   position:relative;
	   top:10;
	   left:-10;
	   height:15px;
	  
	  }
	  #page-container{
	   width:1100px;
	   margin:auto;
	   margin-top:100px;
	   }
	  h2{
       font-weight:normal;
       margin-top:40px;
       font-size:20px;
	   border-bottom:3px solid #BB1919;
	   width:105px;
      }	
    h2 a:hover {
     text-decoration:none;
     color:#1167B0;
	 }	 
	   #highlight a{
        color:#645A5A;
		float:left;
		font-weight:bold;
		font-size:30px;
		text-decoration:none;
       }	
	   #highlight a:hover{
	     color:#1167B0;
		 }
	   #article-summary{
	    color:#5a5a5a;
		width:600px;
		font-size:90%;
		float:left;
		}
	 .clock{
	    height:20px;
	    position:relative;
		top:5px;   
	   }
	  .topic-link{
        color:#A91717;
        text-decoration:none;
		border-left:1px solid #CCCCCC;
		padding-left:10px;
      }		
	  #article-summary a:hover{
	   color:#1167B0;
	   }
	  .date{
	   padding-right:10px;
	   font-size:15px;
	   }
	  #article-container{
	   float:left;
	   width:100%;
		margin:auto;
	  } 
	  #main-article-image{
 	  width:600px;
	  padding-right:10px;
	  }
	  #article-hr{
	    border-top:1px solid #BB1919;
		width:50px;
		float:left;
		}
	  .article-link{
	   color:black;
	   text-decoration:none;
	   }
	 .article-side-image{
	   float:left;
	   width:100px;
	   margin-right:10px; 
	   }
	   #watch-listen{
	    margin-left:10px;
		width:350px;
		float:left;
		}
	   .watch-listen-link{
	     text-decoration:none;
		 color:black;
		 font-weight:bold;
		 }
		  .watch-listen-link:hover {
     text-decoration:none;
     color:#1167B0;
	 }
	 .side-ardicle{
	   float:right;
	   width:230px;
	   position:relative;
	   top:1px;
	   }
    .no-border{
	  border-left:none;
	  padding:0;
	  }
	  .border-right{
	  border-right:1px solid #CCCCCC;
	  }
 </style>	 
 
 </head>
 <body>
   <?php include_once 'inc/header.php'; ?>
   <div class="clear"></div>
    <div id="page-container">
	
	
     <div id="main-article">
	 <?php 
  $user = 'root';
  $pass = '';
  $dbs = 'newsportal';
  $db = new mysqli('localhost', $user, $pass, $dbs) or die("Unable to connect");
  
 $search = mysqli_real_escape_string($db,$_POST['searchterm']);
  $find_news = mysqli_query($db,"SELECT * From newsentity WHERE keywords LIKE '%$search%'");
  while($row = mysqli_fetch_assoc($find_news))
    {
		$news_type = $row['news_type'];
		$news_title = $row['news_title'];
		$news_description = $row['news_description'];
		$news_date = $row['news_date'];
		$news_date = $row['news_date'];
		$image = $row['image'];
		
		?>
	    <h2><?php echo $news_type;?></h2>
     <div id="article-container">		
		<div id="highlight"><a href=""><?php echo $news_title;?><hr>
		</div></a><br><br>
		<div class="col-md-6" id="article-summary">
		<p><?php 
		echo $news_description?></p>
		
		<p><img class="clock" src="images/clock.png"><span class="date"><?php echo $news_date;  ?></span><a href="" class="topic-link"><?php echo $news_type;  ?></a></p>
		<hr id="article-hr">
      
		</div>
		
		
		<img class="col-md-6" id="main-article-image" src="<?php echo $image;?>">
	 </div>
	<?php 
	}
	?>
		  
  
  </div> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>  