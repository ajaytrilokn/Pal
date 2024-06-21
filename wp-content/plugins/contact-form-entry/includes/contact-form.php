<form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                <input type="text" name="your_name" class="form-control" placeholder="Your Name" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
                <input type="email" name="your_email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
                <input type="tel" name="your_phone" class="form-control" placeholder="Phone" required>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                <textarea name="your_message" class="form-control" placeholder="Message" required></textarea>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="submin-btn-main text-left">
                <button type="submit" name="contact_form_submit" class="btn">Submit</button>
            </div>
        </div>
    </div>
    <input type="hidden" name="action" value="contact_form">
</form>
