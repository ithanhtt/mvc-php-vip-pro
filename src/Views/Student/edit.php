<h1>Cập nhật Student</h1>
<form action="<?=WEBROOT?>student/store" method="post">
    <input type="hidden" name="id" value="<?=$student['studentId']?>">
    <div class="form-group">
        <label for="name">Họ tên</label>
        <input style="width: 50%" value="<?=$student['name']?>" class="form-control" type="text" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="gender">Giới tính</label><br>
        <input  type="radio" <?=$student['gender'] ? 'checked' : ''?> id="gender" value="1" name="gender"> Nam
        <input  type="radio" <?=$student['gender'] ? '' : 'checked'?> id="gender" value="0" name="gender"> Nữ
    </div>
    <div class="form-group">
        <label for="dob">Ngày sinh</label>
        <input style="width: 50%" class="form-control" value="<?=$student['dob']?>" name="dob" type="date" name="dob">
    </div>
    <div>
        <button name="btn" class="btn btn-success">Cập nhật</button>
    </div>
</form>