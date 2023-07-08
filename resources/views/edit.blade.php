<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" />

    <title>Update page</title>
</head>

<body>
    <center>

        <table>
            <form action="/response" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$data['ID']}}" />
                <tr>
                    <td>
                        <lable for="first_name">First Name </lable>
                    </td>
                    <td>
                        <input type="text" name="first_name" value="{{$data['firstname']}}" />
                    </td>
                </tr>


                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>

                <tr>
                    <td>
                        <lable for="middle_name">Middle Name</lable>
                    </td>
                    <td>
                        <input type="text" name="middle_name" value="{{$data['middlename']}}" />
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <lable for="last_name">Last Name </lable>
                    </td>
                    <td>
                        <input type="text" name="last_name" value="{{$data['lastname']}}" />
                    </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>

                <!-- <div class="password"> -->
                <tr>

                    <td>
                        <lable for="password">Password</lable>
                    </td>
                    <td>
                        <input type="password" name="password" value="{{$data['password']}}" />
                    </td>
                </tr>

                <!-- </div> -->
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <!-- <div class="mobile no"> -->
                <tr>
                    <td>
                        <lable for="mobileno"> Mobile No.</lable>
                    </td>
                    <td>
                        <input type="tel" name="mobileno" value="{{$data['mobileno']}}" />
                    </td>
                </tr>

                <!-- </div> -->

                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <!-- <div class="email"> -->

                    <td>
                        <lable for="email">Email Address</lable>
                    </td>
                    <td>
                        <input type="email" name="email" value="{{$data['email']}}" />

                    </td>


                </tr>
                <!-- </div> -->
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>

                <!-- <div class="adhar"> -->
                <tr>
                    <td>
                        <lable for="adhar">Adhar Card Number</lable>
                    </td>
                    <td>
                        <input type="text" name="adhar" value="{{$data['adhar']}}" />
                    </td>
                </tr>

                <tr>
                    <td> </td>
                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <!-- </div> -->
                <!-- <div class="address"> -->
                <tr>
                    <td>

                        <lable for="add" name="add">Address:</lable>
                    </td>
                    <td>
                        <textarea name="add" rows="5" cols="30">{{$data['address']}}</textarea>
                    </td>
                    <!-- </div> -->
                </tr>
                <!-- <div class="comment"> -->
                <tr>
                    <td>
                        <lable>Valuable Feedback:</lable>
                    </td>
                    <td>
                        <textarea name="comment" rows="5" cols="30" id="comment">{{$data['feedback']}}</textarea>
                    </td>
                    <!-- </div> -->
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Update</button>
                    </td>
                </tr>
            </form>
            <!-- </div> -->
        </table>
    </center>
</body>

</html>