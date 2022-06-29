﻿<!-- Modal -->
<div class="modal fade" id="staticBackdrop0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel0">Invoice Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div> <!-- end modal header -->
            <div class="modal-body">

            <form class="needs-validation" novalidate="">
            <div class="clearfix">
                                            <div class="float-start mb-3">
                                                <img src="<?php echo base_url('frontend/assets')?>/images/HSBW.png" alt="" height="100">
                                            </div>
                                            <div class="float-end">
                                                <h4 class="m-0 d-print-none">Invoices</h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="float-end mt-3">
                                                    <p><b>Good Day, Happy Smile Customer!</b></p>
                                                    <p class="text-muted font-13">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                                                   
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                            <h4>To,</h4>
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                <textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
                                                </div>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
            
                                        <div class="row mt-4">
                                            <div class="col-sm-5 offset-sm-1">
                                            <h6>Billing Address</h6>
                                                <div class="form-group  ">
                                                <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Name" autocomplete="off">
                                                </div>
                                                <div class="form-group ">
                                                <textarea class="form-control" rows="3" name="address" id="address" placeholder="Address"></textarea>
                                                </div>                
                                            </div> <!-- end col-->
            
                                            <div class="col-sm-5">
                                                <div class="col-sm-13">
                                                    <img src="<?php echo base_url('frontend/assets')?>/images/barcode.png" style="float:right" alt="barcode-image"  class="img-fluid me-2 ">
                                                </div>
                                            </div> <!-- end col-->
                                                         
                                            

                                        <div>
                                        </div>    
                                        <!-- end row -->        
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <table class="table table-bordered table-hover" id="invoiceItem">
                                        <tr>
                                        <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>`
                                        <th width="38%">Service</th>
                                        <th width="15%">Quantity</th>
                                        <th width="15%">Price</th>
                                        <th width="15%">Total</th>
                                        </tr>
                                        <tr>
                                        <td><input class="itemRow" type="checkbox"></td>
                                        <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off"></td>
                                        <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                                        <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off"></td>
                                        <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
                                        </tr>
                                        </table>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                                        <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4">
                                                        <thead>
                                                        <tr><th>#</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Cost</th>
                                                            <th class="text-end">Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b>Laptop</b> <br>
                                                                Brand Model VGN-TXN27N/B
                                                                11.1" Notebook PC
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1799.00</td>
                                                            <td class="text-end">$1799.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <b>Warranty</b> <br>
                                                                Two Year Extended Warranty -
                                                                Parts and Labor
                                                            </td>
                                                            <td>3</td>
                                                            <td>$499.00</td>
                                                            <td class="text-end">$1497.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <b>LED</b> <br>
                                                                80cm (32) HD Ready LED TV
                                                            </td>
                                                            <td>2</td>
                                                            <td>$412.00</td>
                                                            <td class="text-end">$824.00</td>
                                                        </tr>
    
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                       
                                        <div class="row">
                                            <div class="col-sm-6 offset-sm-1">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <p>
                                                        All accounts are to be paid within 7 days from receipt of
                                                        invoice. To be paid by cheque or credit card or direct payment
                                                        online. If account is not paid within 7 days the credits details
                                                        supplied as confirmation of work undertaken will be charged the
                                                        agreed quoted fee noted above.
                                                    </p>
                                                </div>
                                            </div> <!-- end col -->
                                            <div class="col-sm-4">
                                                <div class="float-end mt-3 mt-sm-0">
                                                    <p></p>
                                                    <p><b>Sub-total:</b> <span class="float-end">$4120.00</span></p>
                                                    <p><b>VAT (12.5):</b> <span class="float-end">$515.00</span></p>
                                                    <h3>$4635.00 USD</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
    
                                        <div class="d-print-none mt-4">
                                            <div class="col-sm-4">
                                            <div class="text-end">
                                                <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                                <a href="javascript: void(0);" class="btn btn-info">Submit</a>
                                                <p></p>
                                            </div>
                                            </div>
                                        </div>
                </form>
                        </div>
            </div>
            </div> <!-- end modal footer -->
        </div> <!-- end modal content-->
    </div> <!-- end modal dialog-->
</div> <!-- end modal-->


