<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

    </head>
    <body>

        @if($errors->any())
            <strong>Got some errors!</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ url('submitted') }}" method="post">
            {{ csrf_field() }}

            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{ old('name') }}"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>
                        <select name="age">
                            <option value="12"{{ old('age') == 12 ? ' selected' : '' }}>12-25</option>
                            <option value="26"{{ old('age') == 26 ? ' selected' : '' }}>26-50</option>
                            <option value="50"{{ old('age') == 50 ? ' selected' : '' }}>50+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td>
                        <input type="radio" name="sex" value="male"{{ old('sex') == 'male' ? ' checked' : '' }}> Male
                        <input type="radio" name="sex" value="female"{{ old('sex') == 'female' ? ' checked' : '' }}> Female
                        <input type="radio" name="sex" value="other"{{ old('sex') == 'other' ? ' checked' : '' }}> Other
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="newsletter" value="yes"{{ old('newsletter') == 'yes' ? ' checked' : '' }}> Subscribe me to the monthly newsletter <br>

                        <input type="checkbox" name="tos" value="yes"{{ old('tos') == 'yes' ? ' checked' : '' }}> I agree to the terms of service
                    </td>
                </tr>
            </table>

            <input type="submit">
        </form>

    </body>
</html>
