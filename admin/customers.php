<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../lib/datatable/dataTables.css">
    <!-- custome css -->
    <link rel="stylesheet" href="./asset/style/propertylists.css">

</head>

<section id="propertylist">
    <div id="table">

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>profile</th>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="display: flex; align-items:center; justify-content:center;">
                        <img src="../asset/pics/users/user10.jpg" alt=""
                            style="width: 40px; height:40px; border-radius:50%;">
                    </td>
                    <td>1</td>
                    <td>abebe</td>
                    <td>bebe@zk.com</td>
                    <td>0900000000</td>
                    <td>
                        <a href="./edit.php?id=1">
                            <button>
                                edit
                            </button>
                        </a>
                        <a href="./delete.php?id=1">
                            <button>
                                delete
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="display: flex; align-items:center; justify-content:center;">
                        <img src=" ../asset/pics/users/user10.jpg" alt=""
                            style="width: 40px; height:40px; border-radius:50%;">
                    </td>
                    <td>1</td>
                    <td>abebe</td>
                    <td>bebe@zk.com</td>
                    <td>0900000000</td>
                    <td>
                        <a href="./edit.php?id=1">
                            <button>
                                edit
                            </button>
                        </a>
                        <a href="./delete.php?id=1">
                            <button>
                                delete
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>profile</th>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>

    </div>
</section>
<script src="../lib/jquery/jquery-3.7.1.min.js"></script>
<script src="../lib/datatable/dataTables.js"></script>
<script>
    // insiallizing the datatable obj
    $(document).ready(function() {
        $("#myTable").DataTable();
    });
</script>

</html>