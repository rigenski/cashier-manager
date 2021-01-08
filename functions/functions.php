<?php
include 'connection.php';

// ========================= READ ======================== //

function read($query)
{
    // mengambil variabel global
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// ==================== MEMBER =========================== //

function createMember($data)
{
    global $conn;

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $post = $data['post'];
    $status = $data['status'];

    $query = ("INSERT INTO member  VALUES ('', '$name', '$email', '$phone', '$address', '$post', '$status')");

    mysqli_query($conn, $query);

    // menunjukkan bahwa tidak ada catatan yang terpengaruh
    return mysqli_affected_rows($conn);
}



function deleteMember($id)
{
    global $conn;
    $query = "DELETE FROM member WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// ==================== PRODUCT =========================== //


function createProduct($data)
{
    global $conn;

    $name = $data['name'];
    $price = $data['price'];
    $stock = $data['stock'];
    $id_product = $data['id_product'];
    $image = imageProduct();
    if (!$image) {
        return false;
    }

    $query = ("INSERT INTO product  VALUES ('', '$name', '$image', '$id_product', '$price', '$stock')");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateMember($data)
{
    global $conn;

    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $post = $data['post'];



    $query = ("UPDATE member  SET 
    name = '$name' ,
    email = '$email' ,
    phone = '$phone' ,
    address = '$address',
    post = '$post'
    WHERE id = $id");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function imageProduct()
{
    $fileName = $_FILES['image']['name'];
    // $fileSize = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmpName = $_FILES['image']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('pilih gambar terlebih dahulu !')</script>";
        return false;
    }

    $extensionValidImage = ['jpg', 'jpeg', 'png'];
    $extensionImage = explode('.', $fileName);
    $extensionImage = strtolower(end($extensionImage));

    if (!in_array($extensionImage, $extensionValidImage)) {
        echo "<script>alert('yang anda upload bukan gambar');</script>";
        return false;
    }

    // if ($fileSize > 40000) {
    //     echo "<script>
    //                 alert('ukuran gambar terlalu besar!');
    //             </script>";
    //     return false;
    // }


    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $extensionImage;

    move_uploaded_file($tmpName, '../img/' . $newFileName);

    return $newFileName;
}

function addProductStock($data)
{
    global $conn;

    $id = $data['id'];
    $stock = $data['stock'];

    $query = ("UPDATE product SET 
    stock = $stock 
    WHERE id = $id");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function updateProduct($data)
{
    global $conn;

    $id = $data['id'];
    $name = $data['name'];
    $price = $data['price'];
    $stock = $data['stock'];
    $old_image = $data['old_image'];

    if ($_FILES['image']['error'] == 4) {
        $image = $old_image;
    } else {
        $image = imageProduct();
    }

    $query = ("UPDATE product  SET 
    name = '$name' ,
    price = '$price' ,
    stock = '$stock' ,
    image = '$image'
    WHERE id = $id");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteProduct($id)
{
    global $conn;
    $query = "DELETE FROM product WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// ======================== AUTH ========================= //

function registration($data)
{
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar');
        </script>";
        return false;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password', 'admin', 'admin', 'admin')");

    return mysqli_affected_rows($conn);
}

function updateProfile($data)
{
    global $conn;

    $id = $data["id"];
    $name = $data["name"];
    $email = $data["email"];
    $phone = $data["phone"];

    $query = ("UPDATE admin SET 
    name = '$name',
    email = '$email',
    phone = '$phone'
    WHERE id = $id");

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
