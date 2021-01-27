<?php

require 'db_connect.php';

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header('Location: register_validation/login.php');
    $username = '';
    $password = '';
    exit;
}

include_once 'includes/index_includes/main_hearder.php'

?>

<!-- MOVIES-CONTENT -->

<div class="table-content">

    <h1>MIN-BMS | MOVIES</h1>

    <table>

        <thead>
            <tr>
                <th>Number</th>
                <th>Movie Name</th>
                <th>Rating</th>
                <th>Directer & (cast)</th>
                <th>THeater</th>
                <th>NO.of Seats</th>
                <th>Date & Time</th>
                <th>Book</th>
            </tr>
        </thead>

        <tbody>
            <tr>


                <td></td>
                <td></td>
                <td>⭐</td>
                <td></td>

                <td>
                    <select class="theater" name="seats" id="">
                        <option disabled>select theater</option>
                        <option value="">Max Cenima</option>
                        <option value="">Icons Films</option>
                        <option value="">Globe Cenima</option>
                    </select>
                </td>

                <td>
                    <select name="seats" id="">
                        <option disabled>select seats</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                    </select>
                </td>
                <td>
                    <input type="datetime-local" name="" id="">
                </td>
                <td>
                    <button class="order">Book Now</button>
                </td>

            </tr>
        </tbody>

    </table>

</div>

<?php include_once 'includes/index_includes/mian_footer.php' ?>