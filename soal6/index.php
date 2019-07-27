<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy Bootcamp</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
    <header>
        <div class="container">
            <img src="assets/img/logo.svg" >
            <h2>ARKADEMY BOOTCAMP</h2>
            <div class="clearfix"></div>
        </div>
    </header>

    <div class="container">

        <button id="button-add">ADD</button>

        <div class="bg-form">
            <form action="proses/prosesTambah.php" method="post" id="form">
                <div class="form-header">
                    <div class="container">
                        <h4>ADD DATA</h4>
                        <button type="button" id="close">X</button>
                    </div>
                </div>
                <div class="form-body">
                    <div class="container">
                        <input type="text" name="nama" id="name" placeholder="Name..." autofocus="on" required>
                        <br><br>
                        <select name="kerja" id="kerja" required>
                            <option selected disabled>Work...</option>
                            <option value="1">Frondend Dev</option>
                            <option value="2">Backend Dev</option>
                        </select>
                        <br><br>
                        <select name="gaji" id="gaji" required>
                            <option selected disabled>Salary...</option>
                            <option value="1">10.000.000</option>
                            <option value="2">12.000.000</option>
                        </select>
                        <br><br>
                        <input type="hidden" name="id" id="id" class="id">
                        <button type="submit" id="add">ADD</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-alert">
            <div class="alert">
                <div class="alert-header">
                    <div class="container">
                        <button type="button" id="alert-close">X</button>
                    </div>
                </div>
                <div class="alert-body">
                    <h1><i class="fa fa-check"></i></h1>
                    <h2>asas</h2>
                </div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Work</th>
                    <th>salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("proses/config.php");
                $query = $db->query("SELECT *,nama_pekerja.id as idku, kerja.id as idkerja, gaji.id as idgaji FROM nama_pekerja,kerja,gaji WHERE nama_pekerja.id_kerja=kerja.id AND nama_pekerja.id_gaji=gaji.id ORDER BY idku ASC");
                while ($a = $query->fetch_array()) {
                    echo "
                        <tr>
                            <td>$a[nama]</td>
                            <td>$a[nama_pekerjaan]</td>
                            <td>$a[nominal]</td>
                            <td>
                                
                                <button style='background: transparent;border: none' id='$a[idku]' nama='$a[nama]' class='doDelete'><i class='fa fa-trash' style='color: rgb(230, 109, 109);font-size: 20px'></i></button>

                                <a href='#button-update' id='button-update' class='$a[idku]' nama='$a[nama]' pekerjaan='$a[idkerja]' gaji='$a[idgaji]'><i class='fa fa-edit' style='color: rgb(80, 212, 173);font-size: 20px'></i></a> 
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>

    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/style.js"></script>
</body>

</html>