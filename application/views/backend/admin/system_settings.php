<div class="row">
    <div class="col-md-12">
        <?php echo form_open(site_url('admin/system_settings/do_update'), array(
        'class' => 'form-horizontal form-groups validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));
        ?>
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo get_phrase('general_settings'); ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_name"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_title"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('address'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('phone'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('currency'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="currency"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'currency'))->row()->description; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_email"
                        value="<?php echo $this->db->get_where('settings', array('type' => 'system_email'))->row()->description; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('language'); ?></label>
                    <div class="col-sm-5">
                        <select name="language" class="selectboxit">
                            <?php
                            $fields = $this->db->list_fields('language');
                            foreach ($fields as $field) {
                            if ($field == 'phrase_id' || $field == 'phrase')
                            continue;
                            $current_default_language = $this->db->get_where('settings', array('type' => 'language'))->row()->description;
                            ?>
                            <option value="<?php echo $field; ?>"
                            <?php if ($current_default_language == $field) echo 'selected'; ?>> <?php echo $field; ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('logo'); ?></label>
                    <div class="col-sm-5">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                <img src="<?php echo base_url();?>uploads/logo.png">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="logo" accept="image/*">
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> <?php echo get_phrase('update'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>