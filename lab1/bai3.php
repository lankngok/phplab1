<?php
$name = 'Nguyễn Huy Hoàng';
$age = 25;
$phone = '0986421127';
$email = 'luongitvnsoft@gmail.com';
$address = 'Số 7 - Mĩ Đình - Cầu Giấy - Hà Nội';
$gender = 0;
$avatar = 'https://allimages.sgp1.digitaloceanspaces.com/tipeduvn/2022/01/1643180408_776_Top-Anh-Avatar-dep-doc-ngau-lam-hinh-dai-dien-Facebook-Zalo.jpg';

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container p-5">

    <h2 class="text-danger text-center">Bai3-Lab1</h2>
    <table class="table table-bordered  ">
        <tr>
            <th>
                Name
            </th>
            <td>
                <input type="text" value="<?php echo $name ?>">

            </td>
        </tr>

        <tr>
            <th>
                Age
            </th>
            <td>
                <input type="text" value="<?php echo $age ?>">

            </td>
        </tr>

        <tr>
            <th>
                Phone
            </th>
            <td>
                <input type="text" value="<?php echo $phone ?>">

            </td>
        </tr>

        <tr>
            <th>
                Email
            </th>
            <td>
                <input type="text" value="<?php echo $email ?>">

            </td>
        </tr>

        <tr>
            <th>
                Address
            </th>
            <td>
                <input type="text" value="<?php echo $address ?>">

            </td>
        </tr>

        <tr>
            <th>
                Gender
            </th>
            <td>
                <input type="radio" value="female" name="gender" 
                <?php 
                    if ($gender == 0) {
                      echo "checked";  
                    }
                ?> > Nam
                <input type="radio" value="male" name="gender" 
                <?php 
                    if ($gender == 1) {
                      echo "checked";  
                    }
                ?>> Nữ
            </td>
        </tr>

        <tr>
            <th>Avatar</th>
            <td>
                <img src="<?php echo $avatar ?>" alt="" class="w-25">
                <input type="file">
            </td>
        </tr>
        <tr>
            <th></th>
            <td class="text-center">
                <button>Update</button>
            </td>
        </tr>
    </table>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>