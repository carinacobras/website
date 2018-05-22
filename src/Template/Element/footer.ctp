@@ -1,39 +0,0 @@
<!--Footer-->
<footer class="page-footer font-small pt-4 mt-4">

    <!-- Footer Links-->
    <!-- <div class="container-fluid text-center text-md-left"> -->
        <!-- <div class="row"> -->

            <!--First column-->
            <!-- <div class="col-md-6"> -->
                <!-- <h5 class="text-uppercase">Footer Content</h5> -->
                <!-- <p>Here you can use rows and columns here to organize your footer content.</p> -->
            <!-- </div> -->
            <!--/.First column-->

            <!--Second column-->
            <!-- <div class="col-md-6"> -->
                <!-- <h5 class="text-uppercase">Links</h5> -->
                <!-- <ul class="list-unstyled"> -->
                    <!-- <li><a href="#!">Link 1</a></li> -->
                    <!-- <li><a href="#!">Link 2</a></li> -->
                    <!-- <li><a href="#!">Link 3</a></li> -->
                    <!-- <li><a href="#!">Link 4</a></li> -->
                <!-- </ul> -->
            <!-- </div> -->
            <!--/.Second column-->
        <!-- </div> -->
    <!-- </div> -->
    <!--/.Footer Links -->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            <? echo "<p>Copyright " . date("Y") . " </p>";?>
        </div>
    </div>
	
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}


</style>
</head>
<body>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/carinacobras/" class="fa fa-facebook"></a>

      
</body>
</html> 

    <!--/.Copyright-->

</footer>
<!--/.Footer-->