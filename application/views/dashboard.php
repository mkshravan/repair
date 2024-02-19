    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
		<div class="row">
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3>
              <span id="ContentPlaceHolder1_lblTotalProformaInvoice"><?php echo $total_quotation ?></span></h3>
              <p>Total Quotation</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-archive-o"></i>
            </div>
            <!-- <a href="<?php //echo site_url('report/quotation');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

         
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-olive">
            <div class="inner">
              <h3> <span id="ContentPlaceHolder1_lblTodayProformaInvoice"><?php echo $today_quotation[0]->total; ?></span><sup style="font-size: 20px"></sup></h3>
              <p>Today Quotation</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-archive-o"></i>
            </div>
            <!-- <a href="<?php //echo site_url('report/date_to_date_quotation');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

          <!-- ./col -->
        <!--<div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3> <span id="ContentPlaceHolder1_lblTaxInvoiceDue"><?php //echo $tax_invoice_due[0]->total; ?></span><sup style="font-size: 20px"></sup></h3>
              <p>Tax Invoice Due</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="<?php //echo site_url('report/tax_invoice_due');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <span id="ContentPlaceHolder1_lblCancelQuotation"><?php echo $disapproved_quotation[0]->total; ?></span><sup style="font-size: 20px"></sup></h3>
              <p>Disapproved Quotation</p>
            </div>
            <div class="icon">
              <i class="fa fa-window-close"></i>
            </div>
            <!-- <a href="<?php echo site_url('report/cancel_quotation');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>


        <!-- ./col -->
       
        <!-- ./col -->

        <!-- ./col -->
      </div>
		
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
              <span id="ContentPlaceHolder1_lblTotalBill"><?php echo $total_tax_invoice; ?></span></h3>
              <p>Total Tax Invoice</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <!-- <a href="<?php echo site_url('report/tax_invoice');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

         <!--<div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3> <span id="ContentPlaceHolder1_lblTodayAmt"><?php if($total_received_amount[0]->total > 0) {echo $total_received_amount[0]->total;} else { echo '0';} ?></span></h3>
              <p>Total Received Amount</p>
            </div>
            <div class="icon">
              <i class="fa fa-rupee"></i>
            </div>
            <a href="<?php echo site_url('report/total_received_amount');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> <span id="ContentPlaceHolder1_lblTodayBill"><?php echo $today_tax_invoice[0]->total; ?></span><sup style="font-size: 20px"></sup></h3>

              <p>Today Tax Invoice</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <!-- <a href="<?php echo site_url('report/date_to_date_tax_invoice');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <!--<h3> <span id="ContentPlaceHolder1_lblTodayAmt"><?php echo $today_amount[0]->total; if($today_amount[0]->total) ?></span></h3> -->
              <h3> <span id="ContentPlaceHolder1_lblTodayAmt"><?php if($today_amount[0]->total > 0) {echo $today_amount[0]->total;} else { echo '0';} ?></span></h3>
              <p>Today Received Amount</p>
            </div>
            <div class="icon">
              <i class="fa fa-rupee"></i>
            </div>
            <!-- <a href="<?php echo site_url('report/date_to_date_received_amount');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        </div>


	


     



          <!-- Main row -->
      



      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
