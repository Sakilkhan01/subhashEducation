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
        <h2><span>Scholarship</span></h2>
    </div>
</section>

<div class="research-page2-area">
    <div class="container">
        <style>
            #plsnote li {
                list-style: inline;
            }
        </style>
        <h3 class="sidebar-title">Scholarships based on board exam performance</h3>
        <p>Due to COVID 19, board exams postponed or cancelled so fix fee is decided for class 11. Discounted fee is INR 80,000 only.</p>
       

        <p>&nbsp;</p>

        <h3 class="sidebar-title">Scholarship based on JEE Main percentile</h3>

        <table border="1" style="border: 1px solid #ddd; max-width: 100%; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">JEE Main %tile</th>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">% Scholarship on tuition fees</th>
                    <th style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Total fees after scholarship</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">97-100</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">100%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">0</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">96.5-97</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">90%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">11200</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">96-96.5</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">80%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">22400</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">95-96</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">70%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">33600</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;" td="">94-95</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">60%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">44800</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">93-94</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">50%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">56000</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">92-93</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">40%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">67200</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">90-92</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">30%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">78400</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">85-90</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">20%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">89600</i></td>
                </tr>
                <tr>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">80-85</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">10%</td>
                    <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">100800</i></td>
                </tr>
            </tbody>
        </table>

        <p>Note: Scholarship based on JEE Main/JEE Advanced Score will be applicable only when XII percentage is more than 75%</p>

        <p>&nbsp;</p>

        
        <h3 class="sidebar-title">Scholarship based on Matrix Olympiad Performance</h3>
        <div style="margin: 10px; width: 100%; max-width: 100%;">
            <table border="1" style="border: 1px solid #ddd; max-width: 100%; margin-bottom: 20px;">
                <thead>
                    <tr>
                        <th rowspan="2" style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Overall Rank in respective class</th>
                        <th rowspan="2" style="padding: 2px 8px; vertical-align: middle; text-align: center; color: #2f7544;">Scholarship amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">1</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">100,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">2-5</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">81,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">6-10</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">71,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">11-50</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">51,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">51-100</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">41,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">101-500</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">31,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">501-1000</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">21,000</i></td>
                    </tr>
                    <tr>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;">Rest of the participants</td>
                        <td style="padding: 2px 8px; vertical-align: middle; text-align: center;"><i class="fa fa-inr">11,000</i></td>
                    </tr>
                </tbody>
            </table>
        </div>
       
    </div>
</div>

@stop