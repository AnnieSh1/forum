<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>iDiscuss - Coding forums</title>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <?php
    $id = isset($_GET['threadid']);
    $result = mysqli_query($conn,"SELECT * FROM `threads` WHERE thread_id='$id'");

    while($row = mysqli_fetch_assoc($result)){
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
    
    }
    ?>


    <!-- category container starts here  -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other. No Spam / Advertising / Self-promote
                in the forums.
                These forums define spam as unsolicited advertisement for goods, services and/or other web sites, or
                posts with little, or completely unrelated content. Do not spam the forums with links to your site or
                product, or try to self-promote your website, business or forums etc.</p>
            <p><b>Posted by: Annie</b></p>
        </div>
    </div>


    <div class="container">
        <h2 class="py-2">Discussions</h2>
        <!-- <?php
    $id = $_GET['catid'];
    $result = mysqli_query($conn,"SELECT * FROM `threads` WHERE thread_cat_id = $id");
    $noResult=true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult=false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
    
       echo '<div class="media my-3">
            <img src="img/userdefault.png" width="50px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php?threadid ='. $id .'">'.$title.'</a></h5>
                '.$desc.'
            </div>
        </div>';
        
    }

    if($noResult){
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Threads Found</p>
          <p class="lead"> Be the first person to ask a question </p>
        </div>
      </div>';
    }
    ?> -->
    </div>


    <?php include 'partials/_footer.php'; ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>