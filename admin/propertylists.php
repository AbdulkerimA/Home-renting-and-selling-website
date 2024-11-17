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
                    <th>name</th>
                    <th>price</th>
                    <th>squer foot</th>
                    <th>property for</th>
                    <th>location</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>red house</td>
                    <td>2000,000</td>
                    <td>1000</td>
                    <td>sale</td>
                    <td>addis abeba</td>
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
                    <td>red house</td>
                    <td>2000,000</td>
                    <td>1000</td>
                    <td>sale</td>
                    <td>addis abeba</td>
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
                    <th>name</th>
                    <th>price</th>
                    <th>squer foot</th>
                    <th>property for</th>
                    <th>location</th>
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