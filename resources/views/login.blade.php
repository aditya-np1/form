<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" />

    <title>login page</title>
</head>

<body>
    <center>
        @if(session()->has('mobileno'))
        <h4 id="flsh"> your form has been submitted </h4>
       @endif
        <table id="root">

            <!-- <div class="root"> -->
            <form action="login" method="POST" enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>
                        <lable for="first_name">First Name<sup id="super">*</sup> </lable>
                    </td>
                    <td>
                        <input type="text" name="first_name" id="first_name" placeholder="તમારું પ્રથમ નામ " />
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <span id="error">
                            @error ("first_name")
                            {{$message}}
                            @enderror
                        </span>
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
                        <lable for="middle_name">Middle Name<sup id="super">*</sup></lable>
                    </td>
                    <td>
                        <input type="text" name="middle_name" id="middle_name" placeholder="મધ્ય નામ" />
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <span id="error">
                            @error ("middle_name")
                            {{$message}}
                            @enderror
                        </span>
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
                        <lable for="last_name">Last Name<sup id="super">*</sup> </lable>
                    </td>
                    <td>
                        <input type="text" name="last_name" id="last_name" placeholder="અંતિમ નામ" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <span id="error">
                            @error ("last_name")
                            {{$message}}
                            @enderror
                        </span>
                    </td>
                    <!-- </div> -->
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
                        <lable for="password">Password<sup id="super">*</sup></lable>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" placeholder="પાસવર્ડ" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <span id="error">
                            @error ("password")
                            {{$message}}
                            @enderror
                        </span>
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
                        <lable for="mobileno"> Mobile No.<sup id="super">*</sup></lable>
                    </td>
                    <td>
                        <input type="tel" name="mobileno" id="mobileno" placeholder="મોબાઈલ નંબર" />
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <span id="error">
                            @error ("mobileno")
                            {{$message}}
                            @enderror
                        </span>
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
                        <input type="email" name="email" id="email" placeholder="ઈમેલ એડ્રેસ" />

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
                        <lable for="adhar">Adhar Card Number<sup id="super">*</sup></lable>
                    </td>
                    <td>
                        <input type="text" name="adhar" id="adhar" placeholder="આધારકાર્ડ નંબર" />
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td><span id="error">
                            @error ("adhar")
                            {{$message}}
                            @enderror
                        </span>
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
                        <textarea name="add" rows="5" cols="30" id="add" placeholder="સરનામું"></textarea>
                    </td>
                    <!-- </div> -->
                </tr>
                <!-- <div class="comment"> -->
                <tr>
                    <td>
                        <lable>Valuable Feedback:</lable>
                    </td>
                    <td>
                        <textarea name="comment" rows="5" cols="30" id="comment"
                            placeholder="જો તમારા કોઈ સૂચનો હોય તો અહી દાખલ કરશો "></textarea>
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
                        <button type="submit">submit</button>
                    </td>
                </tr>
            </form>
            <!-- </div> -->
        </table>
    </center>
  
    <h3> Want To See List? </h3>
    <a href='\'><img src="https://mpng.subpng.com/20190419/fbs/kisspng-logo-text-portable-network-graphics-clip-art-symbo-eye-svg-png-icon-free-download-85153-onlinewe-5cba992d090b34.1462652515557327810371.jpg" width="30" height="20"/> Click Here </a>
</body>

</html>