<div class="container" style="margin: 0 auto;margin-top: 50px">

    <div style="text-align: center;font-size: 30px;margin-bottom: 20px;color: green">Cập nhật thông tin phòng máy</div>
    <?php

    while ($data = mysqli_fetch_array($user)) {

        echo '        
                    <div style="text-align: right;">ID: '.$data['id_user'].'</div>
                    <div style="text-align: right;">Đăng nhập dưới tên: '.$data['user_name'].'</div>			
			        <div style="text-align: right;">Quyền quản trị: Admin</div>
					';

    }
    ?>
    <table  class="container table table-hover table-bordered" style="margin-top: 20px;text-align: center;">
        <tbody>
        <tr class="info">
            <td style="font-size: 20px;font-weight: bold;">STT</td>
            <td style="font-size: 20px;font-weight: bold;">Mã Phòng</td>
            <td style="font-size: 20px;font-weight: bold;" colspan="2">Thao tác</td>

        </tr>
        </tbody>
        <?php
            $stt = 1;
        while ($data = mysqli_fetch_array($users)) {

            echo '<tr>
					<td width="50px" >'.$stt.'</td>
					<td width="100px">'.$data["name"].'</td>
					<td style="padding: 3px 1px; width: 120px;text-align: center;"><a href=\'index.php?c=room&&a=update_name&id='.$data["id_room"].'\' class="btn btn-primary">Cập nhật</a></td>			
					<td style="padding: 3px 1px; width: 120px;text-align: center;"><a class=\'delete btn btn-danger\'  data-confirm=\'Are you sure want to delete?\' href="index.php?c=room&&a=delete&&id='.$data["id_room"].'">Xóa</a></td>			
					
					</tr>';
            $stt++;
        }

        ?>
    </table>

    <center><a href='index.php?c=room&&a=create' class="btn btn-primary">Tạo mới phòng máy</a></center>
    <div style="height: 30px;"></div>
    <div style="float: right">
    </div>
    <div style="height: 50px;"></div>
</div>
<script type="text/javascript">
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');

            }
        });
    };
</script>