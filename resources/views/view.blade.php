<link href="{{asset('css/viewtable.css')}}" rel="stylesheet" type="text/css" />
<table id="viewtable" border="1">
    <form>
        <tr>
            <td>
                First name:
            </td>
            <td>
                {{$data['firstname']}}
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
                Middle name:
            </td>
            <td>
                {{$data['middlename']}}
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
                Last name:
            </td>
            <td>
                {{$data['lastname']}}
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
                Your Password:
            </td>
            <td>
                {{$data['password']}}
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
                Mobile No.:
            </td>
            <td>
                {{$data['mobileno']}}
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
                E-mail:
            </td>
            <td>
                {{$data['email']}}
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
                Your Adhar Card:
            </td>
            <td>
                {{$data['adhar']}}
            </td>

        </tr>

        <tr>
            <td></td>
            <td> </td>
        </tr>
        <tr>
            <td>
                Address:
            </td>
            <td>
                {{$data['address']}}
            </td>

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
                Your written Feedback:
            </td>
            <td>
                {{$data['firstname']}}
            </td>

            <!-- </div> -->
        </tr>
        <!-- <div class="comment"> -->

        <tr>
            
            <td colspan="2">
                <a href='/'>Go back</a>
            </td>
        </tr>
    </form>
</table>