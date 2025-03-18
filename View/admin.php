<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Admin Signup</title>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>

    <h2>Pharmacy Admin Signup</h2>
    <form>
        <table border="1" align="center">
            <tr>
                <td><label for="admin-id">Admin ID:</label></td>
                <td><input type="number" id="admin-id" name="admin-id" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="confirm-password">Confirm Password:</label></td>
                <td><input type="password" id="confirm-password" name="confirm-password" required></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td><input type="tel" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male" required> Male
                    <input type="radio" id="female" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><textarea id="address" name="address" rows="3" cols="30" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Sign Up</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
