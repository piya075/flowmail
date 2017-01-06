<!DOCTYPE html>
<html>
<body>

<form action="{{URL('/test')}}" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="images" id="fileToUpload">
    {{ csrf_field() }}
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>