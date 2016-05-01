<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

    </head>
    <body>

        <form action="{{ url('submitted') }}" method="post">
            {{ csrf_field() }}

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>
                        <select name="age">
                            <option value="12-25">12-25</option>
                            <option value="26-50">26-50</option>
                            <option value="50+">50+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>
                        <input type="radio" name="sex" value="male"> Male
                        <input type="radio" name="sex" value="female"> Female
                        <input type="radio" name="sex" value="other"> Other
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="newsletter" value="yes"> Subscribe me to the monthly newsletter <br>

                        <input type="checkbox" name="tos" value="yes"> I agree to the terms of service
                    </td>
                </tr>
            </table>

            <input type="submit">
        </form>

    </body>
</html>
