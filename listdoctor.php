<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listdoctor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title> Doctor list </title>
</head>
<body>
    <nav>

        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="bi bi-list"></i>
        </label>
        
        <label for="" class="logo"> Clinick </label>

        <ul>
            <li><a href="#"> Profile </a></li>
            <li><a href="#" class="active"> Book Appointment </a></li>
            <li><a href="#"> My Appointment </a></li>
        </ul>
        
        <a href="logout.php"><button type="submit" class="logout" name="submit"> Logout </button></a>

    </nav>

    <h1> Doctor List </h1>

    <table>
        <thead>
            <tr>
                <th> Name </th>
                <th> Education </th>
                <th> Schedule </th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><a href="#" class="doctor-name"> DR. Ernest Abegail C. Dela Cruz </a></td>
                <td> Internal Medicine </td>
                <td> For Appointment only </td>
                <td><button class="get-app" type="submit"> Get Appointment </button></td>
            </tr>

            <tr>
                <td><a href="#" class="doctor-name"> DR. Ernest Abegail C. Dela Cruz </a></td>
                <td> Internal Medicine </td>
                <td> For Appointment only </td>
                <td><button class="get-app" type="submit"> Get Appointment </button></td>
            </tr>

            <tr>
                <td><a href="#" class="doctor-name"> DR. Ernest Abegail C. Dela Cruz </a></td>
                <td> Internal Medicine </td>
                <td> For Appointment only </td>
                <td><button class="get-app" type="submit"> Get Appointment </button></td>
            </tr>

            <tr>
                <td><a href="#" class="doctor-name"> DR. Ernest Abegail C. Dela Cruz </a></td>
                <td> Internal Medicine </td>
                <td> For Appointment only </td>
                <td><button class="get-app" type="submit"> Get Appointment </button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>