<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Print </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        

        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
          font-family:Arial, sans-serif;

}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0;
}
page[size="A4"] {  
  width: 10.41cm;
  height: 92cm; 
}
page[size="A4"][layout="landscape"] {
  width: 30cm;
  height: 10.41cm;  
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
    </style>

    <script>
       // window.print();
    </script>

    </head>
    
    <body class="hold-transition">
        <div class="wrapper">
                       

            <!-- Content Wrapper. Contains page content -->
            <div class="">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            

            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        
      
    </body>
</html>
