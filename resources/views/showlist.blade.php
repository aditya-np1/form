<link href="{{asset('css/showlist.css')}}" rel="stylesheet" type="text/css" />
@if(session()->has('id'))
<h4 id="flsh"> your form has been Updated </h4>
@endif
<center>
<table id="showlist" border="1">
    <tr id="attribute">
        <td>
            <p>ID</p>
        </td>
        <td>
            <p>First Name</p>
        </td>
        <td>
            <p>Middle Name</p>
        </td>
        <td>
            <p>Last Name</p>
        </td>
        <!-- <td>
            <p>Password</p>
        </td> -->
        <!-- <td>
            <p>Mobile No. </p>
        </td> -->
        <td>
            <p>Email </p>
        </td>

        <!-- <td>
            <p>AdharCard No.</p>
        </td>
        <td>
            <p>Address </p>
        </td>
        <td>
            <p>Feedback</p>
        </td>-->
        <td colspan="4"> Opration </td> 
    </tr>
    <tr>
        @foreach( $collection as $item)
        <td>
            <p>{{$item['ID']}}</p>
        </td>
        <td>
            <p>{{$item['firstname']}}</p>
        </td>
        <td>
            <p>{{$item['middlename']}}</p>
        </td>
        <td>
            <p>{{$item['lastname']}}</p>
        </td>
        <!-- <td>
            <p>{{$item['password']}}</p>
        </td>
        <td>
            <p>{{$item['mobileno']}}</p>
        </td> -->
        <td>
            <p>{{$item['email']}}</p>
        </td>
        <!-- <td>
            <p>{{$item['adhar']}}</p>
        </td>
        <td>
            <p>{{$item['address']}}</p>
        </td>
        <td>
            <p>{{$item['feedback']}}</p>
        </td> -->
        <div id="opration">
            <td>
                <div id="view">
                    <a href="view/{{$item->ID}}" id="imgview"><img
                            src="https://cdn4.iconfinder.com/data/icons/erp-software-icon-set-1/512/show_documents-512.png"
                            width="30" height="25" />View</a>
                </div>
            </td>


            <td>
                <div id="edit">
                    <a href="edit/{{$item->ID}}" id="imgedit"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Font_Awesome_5_solid_user-edit.svg/300px-Font_Awesome_5_solid_user-edit.svg.png"
                            width="30" height="25" />Edit</a>
                </div>
            </td>

            <td>
                <div id="delete">
                    <a href="delete/{{$item->ID}}" id="imgdelete"><img
                            src="https://www.veryicon.com/download/png/education-technology/learning-to-bully-the-king/delete-351?s=256"
                            width="25" height="25" />Delete</a>
                </div>
            </td>
        </div>
    </tr>
    @endforeach

</table>
<center>
<br> <br> <br>
<div id="addData">
    <p colour="white" id="lastp"> Want To Add Your Data? </p>
    <a href="login" id="aedit"><img id="editimg"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSALkA7yxzIBnumRzlK7WMLhq1vPbfRhKBokw&usqp=CAU"
            width="30" height="30" /> Add here </a>
</div>