<?php

require 'db_connect.php';

//validtion if loggedin
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('Location: register_validation/login.php');
    $username = '';
    $password = '';
    exit;
}

//display movies
$sql = "SELECT * FROM `movies`";
$result = mysqli_query($conn, $sql);
$sno = 0;

//booked part


include_once 'includes/index_includes/main_hearder.php';

?>

<!-- MOVIES-CONTENT -->

<div class="table-content">

    <h1>MIN-BMS | MOVIES</h1>

    <table>

        <thead>
            <tr>
                <th>Number</th>
                <th>Movie Name</th>
                <th>Description</th>
                <th>Cost / Head</th>
                <th>Theater</th>
                <th>NO.of Seats</th>
                <th>Date</th>
                <th>Time</th>
                <th>Book</th>
            </tr>
        </thead>

        <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($result)) : ?>

                <tr>


                    <td><?php echo $sno = $sno + 1 ?></td>
                    <td><?php echo $row['mov_title'] ?></td>
                    <td><?php echo $row['mov_desc'] ?>⭐</td>
                    <td><?php echo $row['CPD'] ?> Rs</td>

                    <form action="booking.php" method="post">

                        <td>
                            <select class="theater" name="Mplace" id="">
                                <option value="" disabled selected hidden>select theater</option>
                                <option value="Max Cenima">Max Cenima</option>
                                <option value="Icons Films">Icons Films</option>
                                <option value="Globe Cenima">Globe Cenima</option>
                            </select>
                        </td>

                        <td>
                            <select name="Mseats" id="">
                                <option value="" disabled selected hidden>select seats</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>

                        <td>
                            <input type="date" name="Mdate" id="">
                        </td>

                        <td>
                            <select name="Mtime" id="time">
                                <option value="" disabled selected hidden>select Time</option>
                                <option value="9:30 am">9:30 am</option>
                                <option value="1:30 pm">1:30 pm</option>
                                <option value="6:30 pm">6:30 pm</option>
                                <option value="11:30 pm">11:30 pm</option>
                            </select>
                        </td>

                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['mov_id']; ?>">
                            <button name="book_movie" class="order">Book Now</button>
                        </td>

                    </form>

                </tr>

            <?php endwhile; ?>


        </tbody>

    </table>

</div>

<?php include_once 'includes/index_includes/mian_footer.php' ?>