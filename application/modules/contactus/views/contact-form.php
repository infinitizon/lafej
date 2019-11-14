<!-- form -->
<form action="<?php echo current_url(); ?>" method="post">
    <div class="contact-grids1 w3agile-6">
        <div class="row">
            <div class="col-md-6 col-sm-6 contact-form1 form-group">
                <label class="col-form-label">Name</label>
                <input type="text" class="form-control" name="ctc_00_nm" placeholder="" value="<?php echo $contact->getCtc_00_nm(); ?>" required="">
                <span class="text-danger"><?php echo form_error('ctc_00_nm') ?></span>
            </div>
            <div class="col-md-6 col-sm-6 contact-form1 form-group">
                <label class="col-form-label">E-mail</label>
                <input type="email" class="form-control" name="ctc_00_eml" placeholder="" value="<?php echo $contact->getCtc_00_eml(); ?>" required="">
                <span class="text-danger"><?php echo form_error('ctc_00_eml') ?></span>
            </div>
        </div>
        <div class="contact-me animated wow slideInUp form-group">
            <label class="col-form-label">Message</label>
            <span class="text-danger"><?php echo form_error('ctc_00_msg') ?></span>
            <textarea name="ctc_00_msg" class="form-control" placeholder="" required=""><?php echo $contact->getCtc_00_msg(); ?></textarea>
        </div>
        <div class="contact-form">
            <input type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>
<!-- //form -->