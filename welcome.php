<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title> 
        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link href='https://fonts.googleapis.com/css?family=Gloria Hallelujah' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet'>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
<body class="content">  
    <header>
            <div class="container">
                <div class = "primary">
                    <a href="index.php"><img src="images/home.png" alt="Home"></a>
                </div>
                        

            </div>
        </header>

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

    <div class="container">  
            <br />  
            <br />
            <br />
            <div class="table-responsive">  
                <h3 align="center">Survey Result</h3><br />
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  
        </div>
    <div id = 'footer'>    
        <?php include('inc/footer.inc');?>
    </div>
</body>
</html>
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        
       
        var name = $('#name').text(); 
        var email = $('#email').text();
        var profession = $('#profession').text();  
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(email == '')  
        {  
            alert("Enter email");  
            return false;  
        }
        if(profession == '')  
        {  
            alert("Enter Profession");  
            return false;  
        }
            
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, email:email, profession:profession},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.email', function(){  
        var id = $(this).data("id2");  
        var email = $(this).text();  
        edit_data(id,email, "email");  
    });
    $(document).on('blur', '.profession', function(){  
        var id = $(this).data("id4");  
        var profession = $(this).text();  
        edit_data(id,profession, "profession");  
    });
       
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>