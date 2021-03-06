
<div class="main-content">
    <div class="page-content">
        <div class="page-header">
            <h1>
             Enquiries Details
            </h1>
        </div><!-- /.page-header -->
        <div class="row">
                <!-- <div class="span11">
                    <div class="widget-box transparent invoice-box">
                        <div class="widget-header widget-header-large">
                            <h3 class="grey lighter pull-left position-relative">
                                <i class="icon-leaf green"></i>
                                Enquiry Details
                            </h3>
                
                            <div class="widget-toolbar no-border invoice-info">
                                <span class="invoice-info-label">Invoice:</span>
                                <span class="red">#<?php echo $order['invoice_number']?></span>
                
                                <br />
                                <span class="invoice-info-label">Date:</span>
                                <span class="blue"> <?php echo $order['order_timestamp']; ?></span>
                            </div>
                
                            <div class="widget-toolbar hidden-480">
                                <a href="#">
                                    <i class="icon-print"></i>
                                </a>
                            </div>
                        </div>
                
                        <div class="widget-body">
                            <div class="widget-main">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <div class="row-fluid">
                                            <div class="span8 label label-large label-info arrowed-in arrowed-right">
                                                <b>Shipping Info</b>
                                            </div>
                                        </div>
                
                                        <div class="row-fluid">
                                            <ul class="list-unstyled spaced">
                                                <li>
                                                    <i class="icon-caret-right blue"></i>
                                                    <?php echo $order['shipping_name']; ?>
                                                </li>
                
                                                <li>
                                                    <i class="icon-caret-right blue"></i>
                                                    <?php echo $order['shipping_address']; ?>,  <?php echo $order['shipping_city']; ?>
                                                </li>
                
                                                <li>
                                                    <i class="icon-caret-right blue"></i>
                                                    <?php echo $order['shipping_postal']; ?>,  <?php echo $order['shipping_state']; ?>,  <?php echo $order['billing_country']; ?>
                                                </li>
                
                                                <li>
                                                    <i class="icon-caret-right blue"></i>
                                                    Phone:
                                                    <b class="red"><?php echo $order['phone']; ?></b>
                                                </li>
                
                                                <li class="divider"></li>
                
                                                <li>
                                                    <i class="icon-caret-right blue"></i>
                                                    <?php echo $order['payment_info']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>/span
                
                                    <div class="span5">
                                        <div class="row">
                                            <div class="span8 label label-large label-success arrowed-in arrowed-right">
                                                <b>Billing Info</b>
                                            </div>
                                        </div>
                
                                        <div>
                                            <ul class="list-unstyled  spaced">
                                                <li>
                                                    <i class="icon-caret-right green"></i>
                                                      <?php echo $order['billing_name']; ?>
                                                </li>
                
                                                <li>
                                                    <i class="icon-caret-right green"></i>
                                                      <?php echo $order['billing_address']; ?>,  <?php echo $order['billing_city']; ?>
                                                </li>
                
                                                <li>
                                                    <i class="icon-caret-right green"></i>
                                                       <?php echo $order['billing_postal']; ?>,  <?php echo $order['billing_state']; ?>,  <?php echo $order['billing_country']; ?>
                                                </li>
                
                                                <li class="divider"></li>
                
                                                <li>
                                                    <i class="icon-caret-right green"></i>
                                                    Contact Info
                                                </li>
                                            </ul>
                                        </div>
                                    </div>/span
                                </div>row
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="table-responsive span9">
                    <table id="orders_details" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center" style="width:5%;">
                                    <label>
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th style="width:15%;">Product Image</th>
                                <th>Product Name</th>
                                <th style="width:10%;" >Quanity</th>
                                <th style="width:11%;">Price</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php 
                            //print_r($products_ordered);
                            if(!empty($products_ordered))
                                    foreach ($products_ordered as $key => $product) { 
                                      $image = FRONTEND_URL . '/images/uploads/default.png';
                                       if ($product['image_url']!= '')
                                            $image = FRONTEND_URL . $product['image_url'];
                                    ?>
                                    <tr><td class="center"><label>
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label></td><td><img src="<?php echo str_replace('/images/', '/thumbnails/78x66/', $image); ?>" width="72" height="52" alt=""></td><td><?php echo $product['item_name'];?></td><td><?php echo $product['quantity']; ?></td><td><?php echo $product['price']; ?></td></tr>

                            <?php   }?>
                       
                        </tbody>
                    </table>      
                    <input type="hidden" id="action" value="view_orders">
                    <div class="row-fluid">

                        <form class="form-horizontal">
                            &nbsp;
                        <div class="widget-box">
                                    <div class="widget-header header-color-blue">
                                        <h5 class="bigger lighter">
                                           
                                            Order Details
                                        </h5>

                                      
                                    </div>

                                    <div class="widget-body">
                                        <input type="hidden" id="hidden_id" value="<?php echo $order['id'];?>">
                                        <div class="widget-main">
                                            <div id="alertOrder"></div>
                                            <div class="control-group">
                                                <label class="control-label" for="order_name">First Name:</label>
                                                    <div class="controls">
                                                        <input type="text" value="<?php echo $order['first_name']; ?> <?php echo $order['last_name']; ?>" id="order_name" name="name" class="input-xxlarge" disabled>           
                                                    </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="order_name">Last Name:</label>
                                                    <div class="controls">
                                                        <input type="text" value="<?php echo $order['last_name']; ?> <?php echo $order['last_name']; ?>" id="order_last_name" name="name" class="input-xxlarge" disabled>           
                                                    </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="order_email">Email:</label>
                                                    <div class="controls">
                                                        <input type="text" id="order_email" value="<?php echo $order['email']?>" name="email" class="input-xxlarge" disabled>           
                                                    </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="order_contact_number">Contact Number:</label>
                                                    <div class="controls">
                                                        <input type="text"  value="<?php echo $order['phone']?>" id="order_contact_number" name="contact_num" class="input-xxlarge" disabled>           
                                                    </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="order_message">Message:</label>
                                                    <div class="controls">
                                                       <textarea id="order_message" rows="8" name="message" style="width:77%;" disabled><?php echo $order['message']?></textarea>     
                                                    </div>
                                            </div>

                                            <?php if (isset( $cf ) && count($cf)): ?>
                                            <h3 class="text-center">Other Fields</h3>
                                            <?php foreach ($cf as $key => $value): ?>
                                            <?php echo $value; ?>
                                            <?php endforeach ?>
                                            <?php endif ?>

                                            <hr>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <a href="<?php echo URL; ?>enquiries/" class="btn" onclick="backView(); return false;">Back</a>
                                                    &nbsp;
                                                    <a href="<?php echo URL . "enquiries/edit/{$order['id']}/" ?>" class="btn btn-success" onclick="resetEditForm(); return false;">Edit</a>
                                                    &nbsp;
                                                    <a href="javascript:void(0)" class="btn btn-danger" onclick="deleteView(); return false;">Delete</a>
                                                </div>
                                            </div>   
                                        </div>

                                    </div>
                        </div>
                        
                        </form>
                    </div><!--PAGE Row END-->
                </div>
        </div>
    </div><!--PAGE CONTENT END-->
</div><!--MAIN CONTENT END-->
<!--MODAL-->
<div id="delete" class="modal fade">
    <div class="modal-dialog">
    
            <div class="modal-content">
                <div class="modal-header no-padding">
                    <div class="table-header">
                        Delete Order
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="white">??</span>
                        </button>
                    </div>
                </div>

                <div class="modal-body">

                    <div id="delete_msg">
                        <h5 class="red"></h5>
                    </div>
                    <input type="hidden" id="hidden_order_id"/>
                </div><!-- /.modal-content -->
                <div class="modal-footer no-margin-top">
                    <button class="btn btn-sm btn-danger pull-right" onclick="deleteOrderModal();">
                        <i class="icon-trash"></i>
                        Delete
                    </button>
                </div>
            </div><!-- /.modal-dialog -->
    </div>
</div>