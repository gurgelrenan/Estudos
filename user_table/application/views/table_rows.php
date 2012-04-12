<?php $count = 0; ?>
<?php foreach($users as $user): ?>
 
<tr id="row_<?php echo $user->id;?>" <?php echo ($count % 2 ? 'class="alternate"' : '');?>>
    <td><?php echo $user->first_name;?></td>
    <td><?php echo $user->last_name;?></td>
    <td><?php echo $user->dob;?></td>
    <td>
        <?php
        if ($user->gender == 'M')
        {
            echo 'Male';
        }
        else if ($user->gender == 'F')
        {
            echo 'Female';
        }
        ?>
    </td>
    <td><?=$user->email_address;?></td>
    <td>
        <ul class="buttons">
            <li><button class="edit" id="update_<?=$user->id;?>">Update</button></li>
            <li><button class="remove" id="remove_<?=$user->id;?>">Remove</button></li>
        </ul>
    </td>
</tr>
 
<?php $count++; ?>
<?php endforeach; ?>