
            <!-- BEGIN PAGE CONTENT-->

            
             <div class="row-fluid">
                
                <!-- BEGIN FORM-->
                            <form action="<?php echo base_url("supplier/AuthorizedAdd"); ?>"
                             class="form-horizontal" method="post">

                            <div class="control-group">
                        <label class="control-label">Firma(*)</label>
                        <div class="controls">

                            <select type="text" class="span6" name="supplier_id" >                          

                          

                             <?php foreach ($suppliers as $supplier) { ?>

                                <option value="<?php echo $supplier->supplierid; ?>"> 

                                    <?php echo $supplier->title; ?>

                                </option>

                                

                            <?php } ?> 

                        </select>
                        </div>
                    </div>

                            <div class="control-group">
                                <label class="control-label">Yetkili Adı(*)</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="name" 
                                    required="" minlength="5"
                                    />                                    
                                </div>
                            </div>

                             <div class="control-group">
                                <label class="control-label">Telefon(*)</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="tel" 
                                    required="" pattern="\d{11}" maxlength="11" minlength="11"   
                                    />                                    
                                </div>
                            </div>

                             <div class="control-group">
                                <label class="control-label">Email(*)</label>
                                <div class="controls">
                                    <input type="email" class="span6 " name="mail" 
                                    required="" minlength="5"
                                    />
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Kaydet</button>
                                <a type="button" class="btn" 
                                href="<?php echo base_url("supplier"); ?>">Vazgeç</a>
                            </div>
                            </form>
                            <!-- END FORM-->



             </div>
            <!-- END PAGE CONTENT-->
         