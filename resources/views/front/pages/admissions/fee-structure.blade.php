@extends('front.layouts.app')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/about.css') }}" />
<style type="text/css">
        #banner{
  background-image: url({{ asset('assets/images/default.png') }});
}
@media only screen and (min-device-width : 320px) and (max-device-width : 480px){
            #banner{
    background-image: url({{ asset('assets/images/default_m.png') }});
  }
}
</style>   
<section class="innerheader">
    <div class="container">
        <h2><span>Fee Structure</span></h2>
    </div>
</section>

<div class="research-page2-area">
    <div class="container">
        <style>
            .learning-outcomes li {
                list-style: inside;
            }
        </style>
        <h3 class="sidebar-title">Fee structure for JEE-Division (Academic Session 2022-23)</h3>

        <table border="1" style="border: 1px solid #ddd; max-width: 100%; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Course</th>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Total Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Momentum (For Class XI)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">1,10,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Impulse (For Class XII)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">1,12,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Agile (For Class XII Pass)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">1,12,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Momentum (For Class XI) Digital</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">60,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Impulse (For Class XII) Digital</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">65,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Agile (For Class XII Pass) Digital</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">65,000</i></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>
        <h3 class="sidebar-title">Fee structure for NEET-Division (Academic Session 2022-23)</h3>

        <table border="1" style="border: 1px solid #ddd; max-width: 100%; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Course</th>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Total Fee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Momentum (For Class XI)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">98,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Impulse (For Class XII)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">98,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Agile Fresher (For Class XII Pass)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">98,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Agile Repeater (For Class XII Pass)</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">98,000</i></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>
        <h3 class="sidebar-title">Fee structure for Pre-foundation (Academic session 2022-23)</h3>
        <a href="https://www.matrixhighschool.org/fee-structure" target="_blank">Pre-foundation and Schooling fee structure</a>

        <p>&nbsp;</p>

        <p>Terms &amp; Conditions:</p>

        <ul class="learning-outcomes">
            <li>Admission kit fee of INR 3000/- is over and above the institute fees.</li>
            <li>In case you wish to continue admission in CBSE board in 11th &amp; 12th, school admission fee of 19,000 would be over this fee. For RBSE students school admission fee will be 10,000.</li>
            <li>Computer lab maintenance fee would be applicable over and above institute fee as per the actuals. The exact details will be communicated at the time of renewal of the online laboratory contract.</li>
            <li>For students enrolling in class 11th or 12th, total fee includes school fee as well as coaching fee.</li>
            <li>The entire fee needs to be paid in two installations. The first instalment has been to be paid at the time of admission. The remaining fees have to be paid at the interval of 3 months from the time of admission.</li>
            <li>For students enrolling in class 11th, there will be some increment in fees for class 12th which will be include fees for board exam preparations.</li>
            <li>Service tax (18%) is payable over and above the Institute Fees for Agile batch as per the Govt rule. Under No Circumstances, service tax will be waived off.</li>
        </ul>

        <p>&nbsp;</p>

        <h3 class="sidebar-title">Refund structure for academic session 2022-23</h3>

        <p>
            <span>
                <b>
                    Note: In case a student wishes to withdraw his/her admission, below refund structure would be applicable.<br />
                    There will be no refund for the administration fee.
                </b>
            </span>
        </p>

        <table border="1" style="border: 1px solid #ddd; max-width: 100%; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">
                        Admission cancellation<br />
                        (from date of admission)
                    </th>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Amount to be Deducted</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Within one week</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">10,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Within two weeks</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">15,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Within one month</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">25,000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">After one month</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">No Refund</td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>
    </div>
</div>

@stop