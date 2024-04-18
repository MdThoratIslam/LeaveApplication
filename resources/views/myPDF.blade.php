<!DOCTYPE html>
<html>
<head>
    <title>Leave Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Add your styles here */
        .logo {
            font-size: 24px;
            font-weight: bold;
            text-align: right;
        }
        .title{
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }
        .checkboxField:checked ::before {
            content: '\2714';
            position: absolute;
            color: #0b1015;
            font-size: 25px; /* Adjust the font size as needed */
        }
        .custom-checkbox
        {
            display: inline-block;
            position: relative;
            cursor: pointer;
            font-size: 24px;
            -webkit-user-select: contain;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: contain;
        }

        .tick-mark::before {
            content: '\2714';
            position: absolute;
            color: #0b1015;
            font-size: 25px; /* Adjust the font size as needed */
        }
        .custom-list{
            display: inline-block;
            position: relative;
            cursor: pointer;
            -webkit-user-select: contain;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: contain;
        }

    </style>
</head>

<body>

<h1 class="logo"><span style="color: #006600">Smart</span><span style="color: #FF0000">Think</span></h1>
<h4 class="title">{{$title}}</h4>
<p></p>
<table class="table table-borderless" style="width: 100%">
    <tr>
        <td colspan="4" style="width: 100%"><span style="font-weight: bold">Date:&nbsp;</span>{{ $date }}</td>
    </tr>
    <tr>
        <td style="width: 30%">Name:</td>
        <td style="width: 70%">{{Auth::user()->name}}</td>
        <td style="width: 30%">Designation:</td>
        <td style="width: 70%">{{$designation_arr[Auth::user()->designation_id]}}</td>
    </tr>
    <tr>
        <td style="width: 30%">Department:</td>
        <td style="width: 70%">{{$department_arr[Auth::user()->designation_id]}}</td>
        <td style="width: 50%">Date of Last Leave:</td>
        <td style="width: 50%"></td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
    <tr>
        <td >Reason:</td>
        <td colspan="3">{{$leave->reason}}</td>
    </tr>
    <tr>
        <td colspan="4"><u>I apply for leave as here under:</u></td>
    </tr>
    <tr>
        <td colspan="4">
            <table class="table table-borderless" style="width: 100%">
                <tr>
                    <td style="width: 15%"><u>Type of Leave:</u></td>
                    <td style="width: 30%; ">
                        <input class="custom-checkbox checkboxField" type="checkbox" value="" id="chkAnnual"
                               @if($leave->type ==1 ) checked @endif>
                        <label class="" for="chkAnnual">Annual (10)</label>
                    </td>
                    <td style="width: 30%">
                        <input class="custom-checkbox checkboxField" type="checkbox" value="" id="chkCasual"
                               @if($leave->type ==2) checked @endif>
                        <label class="" for="chkCasual">Casual (5)</label>
                    <td style="width: 25%">
                        <input class="custom-checkbox checkboxField" type="checkbox" value="" id="chkSick"
                               @if($leave->type ==3) checked @endif>
                        <label class="" for="chkSick">
                            Sick (5)
                        </label>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
    <tr>
        <td colspan="4">Number of Leave Days: {{$leave->total_days}}</td>
    </tr>
    <tr>
        <td colspan="4">
            <table class="table table-borderless" style="width: 100%">
                <tr>
                    <td style="width: 50%">Starting Date:&nbsp;{{ \Carbon\Carbon::parse($leave->starting_date)->format('d-F-Y') }}</td>
                    <td style="width: 50%">Resumption Date:&nbsp;{{ \Carbon\Carbon::parse($leave->resumption_date)->format('d-F-Y') }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table class="table table-bordered" style="width: 100%; border: 1px solid black;">
    <tr>
        <td style="width: 50%;border: 1px solid black; text-align: center;">Contact Address</td>
        <td style="width: 50%;border: 1px solid black; text-align: center;">Contact Number</td>
    </tr>
    <tr>
        <td style="height: 120px; border: 1px solid black;">{{Auth::user()->cur_area}}</td>
        <td style="height: 120px; border: 1px solid black;">{{Auth::user()->phone}}</td>
    </tr>
</table>
<br>
<table class="table table-bordered" style="width: 100%; border: 1px solid black;">
    <tr>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">Remarks if any</td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">Signature</td>
    </tr>
    <tr>
        <td valign="middle" style="width: 25%;height:80px;border: 1px solid black; text-align: center;">Recommending Authority</td>
        <td valign="middle" style="width: 25%;border: 1px solid black; text-align: center;">
            <ul style="list-style-type: circle;text-align: left">
                <li class="@if($leave->rcomnd_auth_status == 1) custom-list  @endif">
                    @if($leave->rcomnd_auth_status == 1)
                        <sapn class="@if($leave->rcomnd_auth_status == 1)tick-mark  @endif">Recommended</sapn>
                    @else
                        Not Recommended
                    @endif
                </li>
{{--                <li>Not Recommended</li>--}}
            </ul>
        </td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
    </tr>
    <tr>
        <td valign="middle" style="width: 25%;height:80px;border: 1px solid black; text-align: center;">Approving Authority</td>
        <td valign="middle" style="width: 25%;height:80px;border: 1px solid black; text-align: center;">
            <ul style="list-style-type: circle;text-align: left">
                <li>Approved</li>
                <li>Not Approved</li>
            </ul>
        </td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
        <td style="width: 25%;border: 1px solid black; text-align: center;">&nbsp;</td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<table class="table table-borderless" style="width: 100%; ">
    <tr>
        <td style="line-height: 1; vertical-align: bottom;">
            @if(Auth::check() && Auth::user()->signature_path && Auth::user()->status_active ===1)
                <img src="{{Auth::user()->signature_path}}" style="height: 50px" class="img-thumbnail p-0" />
                <p style="margin: 0; font-size: 12px;">{{ \Carbon\Carbon::now()->format('d-F-Y') }}</p>
            @else
                &nbsp;
            @endif
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td style="width: 50%;">
            <p style=" border-top: 2px dashed  black; padding-top: 5px;display: inline-block;">Applicant Signature</p>
        </td>

        <td style="width: 50%;text-align: right">
            <p style=" border-top: 2px dashed  black; padding-top: 5px;display: inline-block;">Hr/ Admin Department</p>
        </td>
    </tr>
</table>


<footer class="bg-body-tertiary text-center text-lg-start" style="position: fixed;top: 980px;text-align: center">
    <div class="text-center p-3" >
        <p>Smart Think, Flat E1, House# 99, Road# 04, Block# A, Banani, Dhaka- 1213, Bangladesh</p>
        <p>+880 17 1320 1878, info@ smartthink.com.bd, www. Smartthink.com.bd</p>
    </div>
    <!-- Copyright -->
</footer>
</body>

</html>
