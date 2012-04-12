<doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User Management with CodeIgniter and jQuery</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/ui-lightness/jquery-ui-1.8.18.custom.css">
        
		<script src="<?php echo base_url(); ?>public/js/jquery-1.7.1.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/jquery-ui-1.8.18.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/ajax-table.js"></script>
    </head>
    <body>
 
        <!-- the form used to add and update user records -->
        <form id="user_form" action="" method="POST" title="Add User">
 
            <p class="feedback"></p>
 
            <label>First Name:</label>
            <input type="text" name="first_name">
 
            <label>Last Name:</label>
            <input type="text" name="last_name">
 
            <label>Dob:</label>
            <input type="text" name="dob" class="date">
 
            <label>Gender:</label>
            <select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
 
            <div class="clear"></div>
 
            <label>Email address:</label>
            <input type="text" name="email_address">         
 
        </form>
 
        <!-- the table holding our user records -->
        <table border="0" cellpadding="0" cellspacing="0" id="ajax_table">
 
            <caption>User Management</caption>
 
            <thead>
                <tr>
                    <th width="130">First Name</th>
                    <th width="150">Last Name</th>
                    <th width="90">DoB</th>
                    <th width="60">Gender</th>
                    <th width="250">Email address</th>
                    <th width="100">
                        <button class="add float-right">Add User</button>
                    </th>
                </tr>
            </thead>
 
            <tfoot>
                <tr>
                    <td colspan="7"><span><?php echo count($users);?></span> Usuários cadastrados</td>
                </tr>
            </tfoot>
 
            <tbody>
 
                <!-- load another view here! -->
                <?php $this->load->view('table_rows.php'); ?>                    
 
            </tbody>
 
        </table>
 
    </body>
</html>